<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        try {
            // Validate the form data
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'subject' => 'required|string|max:255',
                'message' => 'required|string|max:5000',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'errors' => $validator->errors()
                ], 422);
            }

            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'user_message' => $request->message,  // Renamed to avoid conflict
                'submitted_at' => now()
            ];

            // Log what we're trying to send
            Log::info('Attempting to send contact form email', [
                'to' => 'Senne@sde-agency.com',
                'from' => config('mail.from.address'),
                'subject' => 'Contact Form: ' . $data['subject'],
                'mail_config' => [
                    'driver' => config('mail.default'),
                    'host' => config('mail.mailers.smtp.host'),
                    'port' => config('mail.mailers.smtp.port'),
                ]
            ]);

            // Try to send email
            Mail::send('emails.contact', $data, function ($message) use ($data) {
                $message->to('Senne@sde-agency.com')
                        ->subject('Contact Form: ' . $data['subject'])
                        ->from(config('mail.from.address'), config('mail.from.name'))
                        ->replyTo($data['email'], $data['name']);
            });
            
            Log::info('Contact form email sent successfully!');
            return response()->json(['success' => true, 'debug' => 'Email sent successfully']);

        } catch (\Exception $e) {
            // Log the detailed error
            Log::error('Contact form error: ' . $e->getMessage());
            Log::error('Stack trace: ' . $e->getTraceAsString());
            
            return response()->json([
                'success' => false,
                'message' => 'Er is een fout opgetreden bij het verzenden van je bericht.',
                'debug' => config('app.debug') ? $e->getMessage() : 'Check Laravel logs for details'
            ], 500);
        }
    }
}
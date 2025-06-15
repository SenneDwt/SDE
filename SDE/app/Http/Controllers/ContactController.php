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
                'message' => $request->message,
                'submitted_at' => now()
            ];

            // Try to send email, but don't fail if it doesn't work
            try {
                Mail::send('emails.contact', $data, function ($message) use ($data) {
                    $message->to('Senne@sde-agency.com')
                            ->subject('Contact Form: ' . $data['subject'])
                            ->from(config('mail.from.address'), config('mail.from.name'))
                            ->replyTo($data['email'], $data['name']);
                });
                
                Log::info('Contact form submitted and email sent successfully', $data);
            } catch (\Exception $mailException) {
                // Log the email error but don't fail the request
                Log::error('Email sending failed: ' . $mailException->getMessage());
                Log::info('Contact form submitted (email failed)', $data);
            }

            return response()->json(['success' => true]);

        } catch (\Exception $e) {
            // Log the detailed error
            Log::error('Contact form error: ' . $e->getMessage());
            
            return response()->json([
                'success' => false,
                'message' => 'Er is een fout opgetreden bij het verzenden van je bericht.'
            ], 500);
        }
    }
}
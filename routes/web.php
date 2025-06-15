<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController as ContactController;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/contact', function () {
    return view('contact');
})->name('contact');



Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

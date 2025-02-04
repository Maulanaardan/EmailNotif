<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/send', [HomeController::class, 'sendEmail'])->name('send');
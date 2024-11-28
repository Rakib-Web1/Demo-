<?php

use App\Http\Controllers\Authentication\StudentAuthController;
use App\Http\Controllers\Authentication\StudentRegistrationController;
use Illuminate\Support\Facades\Route;

//Student Authentication
Route::post('/registration', [StudentRegistrationController::class, 'registration']);
Route::post('/otp-verification', [StudentRegistrationController::class, 'verifyOTP']);
Route::post('/otp-resend', [StudentRegistrationController::class, 'resendOTP']);
Route::post('/login', [StudentAuthController::class, 'login']);

Route::middleware(['auth:api', 'user', 'scope:user'])->group(function () {
    Route::post('/set-password', [StudentRegistrationController::class, 'setPassword']);
});

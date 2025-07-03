<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('main');
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.post');

Route::get('patient/home', function () {
    return view('patient.home');
})->name('patient.home');

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

Route::get('/patient/appointments', function () {
    return view('patient.appointment');
})->name('patient.appointments');

Route::get('/patient/book', function () {
    return view('patient.book');
})->name('patient.book');

Route::get('/patient/payment', function () {
    return view('patient.payment');
})->name('patient.payment');

Route::get('/patient/paynow', function () {
    return view('patient.paynow');
})->name('patient.paynow');

Route::get('/patient/prescription', function () {
    return view('patient.prescription');
})->name('patient.prescription');

Route::get('/patient/dental', function () {
    return view('patient.dental');
})->name('patient.dental');
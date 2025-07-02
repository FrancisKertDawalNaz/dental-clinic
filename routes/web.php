<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('main');
});

Route::get('/login', function () {
    return view('main');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

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
<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view("auth.signIn");
})->name("login");

Route::post('/login', [AuthController::class, "login"]);

Route::get('/admin', function () {
    return view('auth.admin.dashboard');
})->middleware('auth')->name('dashboard.admin');

Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/response', function () {
    return view('auth.admin.response');
})->middleware('auth');

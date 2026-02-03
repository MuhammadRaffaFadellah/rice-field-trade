<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/regist', [RegisterController::class, 'index'])->name('register.index');
Route::post('/regist', [RegisterController::class, 'store'])->name('register.store');

Route::get('/login', fn() => view('auth.login'))->name('login');
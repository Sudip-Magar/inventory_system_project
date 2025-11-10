<?php

use App\Livewire\Auth\Register;
use App\Livewire\Auth\Login;
use App\Livewire\User\Dashboard;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('/register', Register::class)->name('register');
    Route::get('/login', Login::class)->name('login');
});

Route::middleware('web')->group(function () {
    Route::get('/dashboard',Dashboard::class)->name('dashboard');
 });
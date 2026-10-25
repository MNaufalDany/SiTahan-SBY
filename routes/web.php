<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/landing', 'landing')->name('landing');

Route::view('/login-pemerintah', 'pemerintah.login')
    ->name('pemerintah.login');

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/landing', 'landing')->name('landing');

// Route untuk mengecek halaman login user SiTahan SBY sesuai desain
Route::get('/login-user', function () {
    return view('loginuser');
});
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/landing', 'landing')->name('landing');

Route::get('/simulasi/ajukan', function () {
    return view('ajukan');
})->name('ajukan');



Route::get('/pengajuan/riwayat', function () {
    return view('riwayat');
})->name('riwayat');
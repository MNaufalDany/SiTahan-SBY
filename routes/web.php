<?php

use Illuminate\Support\Facades\Route;

Route::get('/simulasi/kondisi-awal', function () {
    return view('simulasi.kondisi-awal');
});

Route::get('/simulasi/hasil-awal', function () {
    return view('simulasi.hasil-awal');
});
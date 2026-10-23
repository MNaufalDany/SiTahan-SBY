<?php

use Illuminate\Support\Facades\Route;

Route::get('/simulasi/kondisi-awal', function () {
    return view('simulasi.kondisi-awal');
});

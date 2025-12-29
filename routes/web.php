<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halaman_utama', function () {
    return view('main_pages.halaman_utama');
});

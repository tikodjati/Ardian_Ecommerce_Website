<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('main_pages.halaman_utama');
});

Route::get('/halaman_utama', function () {
    return view('main_pages.halaman_utama');
});

Route::get('/produk', function () {
    return view('main_pages.halaman_utama');
});

Route::get('/product/detail', function () {
    return view('main_pages.detail_produk');
});
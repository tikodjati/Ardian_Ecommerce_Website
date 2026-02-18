<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SettingController;

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
    return view('product.detail_produk');
});

Route::get('/product', function () {
    return view('product.product');
});

Route::prefix('admin')->group(function () {

    Route::resource('categories', CategoryController::class);
    Route::resource('products', ProductController::class);
    Route::resource('collections', CollectionController::class);
    Route::resource('materials', MaterialController::class);
    Route::resource('pages', PageController::class);
    Route::resource('settings', SettingController::class);

});

Route::patch('admin/categories/{category}/toggle', 
    [CategoryController::class, 'toggle'])
    ->name('categories.toggle');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryCtrl;
use App\Http\Controllers\ProductCtrl;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/categories', [CategoryCtrl::class, 'index'])->name('categories.index');
Route::get('/categories/{category}', [CategoryCtrl::class, 'show'])->name('categories.show');

Route::get('/products', [ProductCtrl::class, 'index'])->name('products.index');
Route::get('/products/{product}', [ProductCtrl::class, 'show'])->name('products.show');

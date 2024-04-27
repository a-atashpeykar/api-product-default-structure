<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class,'index'])->name('products.index');
Route::post('/store', [ProductController::class,'store'])->name('products.store');
Route::get('/show/{product}', [ProductController::class,'show'])->name('products.show');
Route::get('/edit/{product}', [ProductController::class,'edit'])->name('products.edit');
Route::post('/update/{product}', [ProductController::class,'update'])->name('products.update');
Route::delete('/delete/{product}', [ProductController::class,'destroy'])->name('products.destroy');

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/kategori', \App\Http\Controllers\KategoriController::class);
Route::resource('/barang', \App\Http\Controllers\BarangController::class);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\barangcontroller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return "ini halaman login";
    
});
Route::get('/barang/{id?}', function ($id) {
    return "anda berada di halaman produk : " . $id;
    
});
Route::get('/barang/{id?}', function ($id=null) {
    if ($id==null) {
        return "produk tidak ditemukan"; 
    }
    return "ini adalah halaman produk " . $id;
    
});
Route::get('/index', [barangcontroller::class, 'index']); 


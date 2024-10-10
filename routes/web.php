<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/aturan', function () {
    return view('aturan');
});
Route::get('/alur', function () {
    return view('alur');
});
Route::get('/daftar', function () {
    return view('daftar');
});
Route::get('/seleksi', function () {
    return view('seleksi');
});

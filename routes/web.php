<?php

use App\Models\Jadwal;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/aturan', function () {
    return view('aturan');
});
Route::get('/jadwal', function () {
    $jadwals = Jadwal::all();
    return view('jadwal', compact('jadwals'));
});
Route::get('/daftar', function () {
    return view('daftar');
});
Route::get('/seleksi', function () {
    return view('seleksi');
});

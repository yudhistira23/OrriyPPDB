<?php

use App\Models\Jadwal;
use App\Models\Flow;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/alur', function () {
    $alur = flow::all();
    return view('alur', compact('alur'));
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

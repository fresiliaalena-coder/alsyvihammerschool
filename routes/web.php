<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
});
Route::get('/profil', function () {
    return view('profil');
});
Route::get('/pengumuman', function () {
    return view('pengumuman');
});
Route::get('/sekolah', function () {
    return view('sekolah');
});

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/profil', function () {
    return view('pages.profil');
});

Route::get('/buku', function () {
    return view('pages.buku');
});

Route::get('/syarat', function () {
    return view('pages.syarat');
});
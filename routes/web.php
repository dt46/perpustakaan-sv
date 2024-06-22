<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/profil', function () {
    return view('pages.profil');
});

Route::get('/pendataan', function () {
    return view('pages.pendataan');
});

Route::get('/syarat', function () {
    return view('pages.syarat');
});
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});
Route::get('/cv-dark', function () {
    return view('pages.cv-dark');
});
Route::get('/cv-light', function () {
    return view('pages.cv-light');
});

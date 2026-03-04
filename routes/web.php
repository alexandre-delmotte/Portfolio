<?php

use App\Http\Controllers\ContactController;
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
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

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
Route::get('/cv-english', function () {
    return view('pages.cv-english');
});
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['fr', 'en'])) {
        session()->put('locale', $locale);
    }
    return redirect()->back();
})->name('lang.switch');

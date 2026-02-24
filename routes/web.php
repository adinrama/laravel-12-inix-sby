<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/me', function () {
    return "Hello, my name is Rama";
});

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about', function () {
    return view('pages.about', ['name'=>'Adin Rama', 'address'=>'Tulungagung']);
});

Route::get('/contact', [ContactController::class, 'index']);

Route::get('/product', [ProductController::class, 'index']);

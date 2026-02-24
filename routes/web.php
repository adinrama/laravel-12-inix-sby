<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/me', function () {
    return "Hello, my name is Rama";
});

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', ['name'=>'Adin Rama', 'address'=>'Tulungagung']);
});

Route::get('/contact', [ContactController::class, 'index']);

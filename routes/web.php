<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend');
})->name('frontend');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/admin', function () {
    return view('admin');
})->name('admin');
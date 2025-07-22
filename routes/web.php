<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/category', function () {
    return view('pages.category');
})->name('category');

Route::get('/articles', function () {
    return view('pages.articles');
})->name('articles');

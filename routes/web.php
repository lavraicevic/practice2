<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ArticleShowController;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/category', function () {
    return view('pages.category');
})->name('category');

Route::get('/articles', [ArticleController::class, 'index'])->name('articles');

Route::get('/articles/{article}', [ArticleShowController::class, 'show'])->name('article');

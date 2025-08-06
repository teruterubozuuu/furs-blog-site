<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('/devlog', function () {
    return view('devlog');
});

Route::get('/donation', function () {
    return view('donation');
});

Route::get('/addpost', [PostController::class, 'create'])->name('addpost');
Route::post('/addpost', [PostController::class, 'store'])->name('addpost.submit');

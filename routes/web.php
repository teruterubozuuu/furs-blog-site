<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/devlog',function(){
    return view('devlog');
});

Route::get('/donation',function(){
    return view('donation');
});

Route::get('/addpost', function () {
    return view('addpost');
});
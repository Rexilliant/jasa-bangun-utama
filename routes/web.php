<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/tentang-kami', function () {
    return view('tentang-kami');
});
Route::get('/portfolio-detail', function () {
    return view('portfolio-detail');
});
Route::get('/login', function () {
    return view('login');
});

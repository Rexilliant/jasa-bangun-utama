<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/tentang-kami', function () {
    return view('tentang-kami');
});

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/proyek', function () {
    return view('projects');
});

Route::get('/kontak', function () {
    return view('contact');
});

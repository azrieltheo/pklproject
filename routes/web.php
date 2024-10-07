<?php

use Illuminate\Support\Facades\Route;

// Route untuk halaman Home
Route::get('/', function () {
    return view('home');
});

// Route untuk halaman About
Route::get('/about', function () {
    return view('about', ['nama' => 'Azriel Theo']);
});

// Route untuk halaman Blog
Route::get('/blog', function () {
    return view('blog');
});

// Route untuk halaman Kontak
Route::get('/kontak', function () {
    return view('kontak');
});

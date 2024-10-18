<?php

use Illuminate\Support\Facades\Route;

// Route GET untuk menampilkan halaman Home (Login Form)
Route::get('/', function () {
    return view('home'); // Halaman login
});

// Route POST untuk menangani login dan redirect ke blog
Route::post('/', function () {
    // Logic untuk login (bisa tambahkan validasi atau autentikasi di sini)
    return redirect('/blog'); // Setelah login redirect ke blog
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/settings', function () {
    return view('settings');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/kontak', function () {
    return view('kontak');
});


<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

// Route untuk halaman login
Route::get('/', function () {
    return view('login');
})->name('login');

// Route untuk proses login
Route::post('/login', function () {
    // Logika autentikasi (misal menggunakan Auth::attempt)
    // jika berhasil, redirect ke dashboard
    if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
        return redirect()->intended('dashboard');
    }
    // jika gagal, kembali ke halaman login dengan pesan error
    return back()->withErrors(['loginError' => 'Login gagal, periksa kembali kredensial Anda.']);
});

// Route untuk halaman dashboard yang dilindungi oleh middleware 'auth'
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

// Route untuk halaman about
Route::get('/about', function () {
    return view('about', ['nama' => 'Azriel Theo']);
})->middleware('auth');

// Route untuk halaman settings yang dilindungi oleh middleware 'auth'
Route::get('/settings', function () {
    return view('settings');
})->middleware('auth');

// Route untuk logout
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

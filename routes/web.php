<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ['tittle' => 'Dashboard']);
});

Route::get('/about', function () {
    return view('about', ['tittle' => 'About']);
});
Route::get('/shop', function () {
    return view('shop', ['tittle' => 'Shop']);
});

Route::get('/contact', function () {
    return view('contact', ['tittle' => 'Contact']);
});

Route::get('/login', function () {
    return view('auth/login');
});

Route::get('/register', function () {
    return view('auth/register');
});

Route::get('/admin', function () {
    return view('admin/admin');
});

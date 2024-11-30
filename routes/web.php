<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login-register');
});

Route::get('/product-details', function () {
    return view('product-details');
});

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/404', function () {
    return view('404');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

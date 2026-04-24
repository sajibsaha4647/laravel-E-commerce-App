<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/404', function () {
    return view('404');
})->name('404');

Route::get('/bestsellers', function () {
    return view('bestseller');
})->name('bestsellers');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');

Route::get('/product/{id}', function ($id) {
    return view('single', ['id' => $id]);
})->name('product.show');
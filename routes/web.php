<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.home');
})->name('home');

Route::get('/404', function () {
    return view('frontend.404');
})->name('404');

Route::get('/bestsellers', function () {
    return view('frontend.bestseller');
})->name('bestsellers');

Route::get('/cart', function () {
    return view('frontend.cart');
})->name('cart');

Route::get('/checkout', function () {
    return view('frontend.checkout');
})->name('checkout');

Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');

Route::get('/shop', function () {
    return view('frontend.shop');
})->name('shop');

Route::get('/product/{id}', function ($id) {
    return view('frontend.productDetails', ['id' => $id]);
})->name('product.show');
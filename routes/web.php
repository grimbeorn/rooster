<?php

Route::get('/', function () {
    return view('index');
});

Route::get('/rooster', function () {
    return view('rooster');
});

Route::get('/process', function () {
    return view('process');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/faqs', function () {
    return view('faqs');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact2', 'contact2Controller@send');


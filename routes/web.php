<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/program', function () {
    return view('program');
});

Route::get('/admission', function () {
    return view('admission');
});

Route::get('/linkages', function () {
    return view('linkages');
});

Route::get('/contact', function () {
    return view('contact');
});

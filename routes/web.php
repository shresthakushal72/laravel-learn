<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/courses', function () {
    return view('course');
});

Route::post('/save-cource', function (Request $request) {
    return $request;
});
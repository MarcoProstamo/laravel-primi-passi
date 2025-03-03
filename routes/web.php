<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/us', function () {
    return view('us');
});

Route::get('/potato', function () {
    return view('potato');
});


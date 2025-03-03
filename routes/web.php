<?php

use Illuminate\Support\Facades\Route;


$potatoes = [['name' => 'Russet', 'color' => 'brown'], ['name' => 'Yukon Gold', 'color' => 'yellow'], ['name' => 'Red', 'color' => 'red'], ['name' => 'Purple', 'color' => 'purple']];

Route::get('/', function() use ($potatoes) {
    return view('home', ['potatoes' => $potatoes]);
});

Route::get('/us', function () {
    return view('us');
});

Route::get('/potato', function () {
    return view('potato');
});


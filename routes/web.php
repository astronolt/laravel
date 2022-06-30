<?php

use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return view('welcome');
});
*/


Route::get('/', function () {
    $categories = [
        "type" => "Laghos",
        "base" => "Cheezy",
        "price" => 10,
    ];
    return view('intro', $categories);
});


Route::get('/test', function () {
    return view('test');
});


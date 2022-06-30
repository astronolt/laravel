<?php

use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return view('welcome');
});
*/

/*
Route::get('/', function () {
    $categories = [
        "type" => "Laghos",
        "base" => "Cheezy",
        "price" => 10,
    ];
    return view('intro', $categories);
});
*/


/*
Route::get('/', function () {
    $requests = [
        "name" => request("name")
    ];
    return view('test', $requests);
});
*/


Route::get('/{page}', function ($page) {

    $requests = [
        "name" => request("name"),
        "page" => $page,
    ];
    return view('test', $requests);
});


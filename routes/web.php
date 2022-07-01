<?php

use Illuminate\Support\Facades\Route;

//Incliude this namespave for each controllers
use App\Http\Controllers\PageController;


Route::get('/{page}', [PageController::class, 'index']);

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


/*
//http://localhost:8000/supermario/?name=mario
Route::get('/{page}', function ($page) {

    $requests = [
        "name" => request("name"),
        "page" => $page,
    ];
    return view('test', $requests);
});
*/
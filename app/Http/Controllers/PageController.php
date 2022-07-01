<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PageController extends Controller
{
    public function index($page){

        //$users = Pizza::orderBy("name", "desc")->get();
        //$users = Pizza::where("name", "name2")->get();
        //$users = Pizza::findOrFail(2);
        $users = Pizza::all();

        $requests = [
            "page" => $page,
            "name" => request('name'),
            "users" => $users
        ];
        return view('test', $requests);
    }
}

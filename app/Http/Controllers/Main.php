<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Main extends Controller
{
    //
    public function index()
    {
       echo "j";
    }
    public function printName()
    {
        return view("page2", [
            "name" => "This is a page",
            "lorem" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quibusdam.",
            "pgnum" => "2"
        ]);
    }
    public function echoName()
    {
        return view("pageb", [
            "name" => "This is a page",
            "lorem" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quibusdam.",
            "pgnum" => "b"
        ]);
    }
}

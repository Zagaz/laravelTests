<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/main", "Main@index");

Route::view("/page", "page" , [
    "name" => "This is a page",
    "lorem" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quibusdam."
]
);
//Above, we are passing data to the view page

//Below, we are passing data to the controller // It's cleaner to pass data to the controller
Route::get("/page2", "Main@printName"); // Main is the controller and printName is the function in the controller

Route::get("/pageb", "Main@echoName");








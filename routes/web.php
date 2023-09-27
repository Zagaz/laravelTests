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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/' , 'Main@home2'); // Class 16 -> BLADE LAYOUTS




/*
Structure of a route:
Route::<action>(<path>, <controller>@<function>)
*/

Route::get("/main", "Main@index");

Route::view(
    "/page",
    "page",
    [
        "name" => "This is a page",
        "lorem" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quibusdam."
    ]
);
//Above, we are passing data to the view page

//Below, we are passing data to the controller // It's cleaner to pass data to the controller
Route::get("/page2", "Main@printName"); // Main is the controller and printName is the function in the controller


//Below is a route with a Required Parameter
Route::get('/user/{name}/', function ($name) {
    echo "Name: $name";
});

// Route::get('/user/{name}/{last}', function ($name, $last) {
//     echo "Name: $name $last";
// });

Route::get('/user/{name}/{last}', 'Main@user');

Route::view('/usera/{name}/{age}/{last?}', 'user'); // <= Keep the optionals to the last

//Below is a route with an Optional Parameter
//Route::view('/usera/{name?}/{last?}', 'user');

// Ramed Routes
Route::get('/home', 'Main@home')->name('home');
Route::get('/services', 'Main@services')->name('services');
Route::get('/contacts', 'Main@contacts')->name('contacts');


// Testin...
Route::get('/clients', 'Clients@index');
Route::get('/nomes', 'Clients@nomes');
Route::get('/shirts/{s}', 'products\shirts@shirts');

// Class 12
Route::get('status/{a}', 'Stats');
Route::get('client/{index}', 'Clients@cliente');

// Class 13
Route :: resource('products', 'Products');

//class 14
Route :: view ('ver', 'pagina');
Route :: view ('cliente', 'clientes.cliente');
Route :: get('vercontroller', 'Clients@pagina');

// Class 15





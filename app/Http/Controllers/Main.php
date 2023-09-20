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
    // Below: Passing data to a view
    public function echoName()
    {
        return view("pageb", [
            "name" => "This is a page",
            "lorem" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quibusdam.",
            "pgnum" => "b"
        ]);
    }
    // Below: Passing data to the controller
    public function user($name, $last)
    {
        echo "Name: $name $last!";
    }

    // Below: Passing data to the controller and the $last is optional
    // Keep the optionals to the last
    public function userView($name, $age, $last = '')
    {
        return view("user", [
            "name" => $name,
            "last" => $last,
            "age" => $age
        ]);
    }
    //Named Routs :

    public function home()
    {
        echo '<h3>';
        echo '🏠 Home';
        echo '</h3> <hr> <br>';
        echo '<a href="'.route('home').'">Home</a><br>';
        echo '<a href="'.route('services').'">Services</a><br>';
        echo '<a href="'.route('contacts').'">Contacts</a><br>';
    }
    // services
    public function services()
    {
        echo '<h3>';
        echo '🏤Services';
        echo '</h3> <hr> <br>';
        echo '<a href="'.route('home').'">Home</a><br>';
        echo '<a href="'.route('services').'">Services</a><br>';
        echo '<a href="'.route('contacts').'">Contacts</a><br>';
    }
    // contacts
    public function contacts()
    {
        echo '<h3>';
        echo '📧Contacts';
        echo '</h3> <hr> <br>';
        echo '<a href="'.route('home').'">Home</a><br>';
        echo '<a href="'.route('services').'">Services</a><br>';
        echo '<a href="'.route('contacts').'">Contacts</a><br>';

    }


}

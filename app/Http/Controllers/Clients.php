<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Clients extends Controller
{

    private $clients = [

        [
            'name' => 'Jean-luc Picard',
            'rank' => 'Captain',
        ],
        [
            'name' => 'William Riker',
            'rank' => 'Commander',
        ],
        [
            'name' => 'Data',
            'rank' => 'Lieutenant Commander',
        ],
    ];

    public function index()
    {
        echo "Clients";
    }
    public function nomes()
    {
        echo "Nomes";
    }
    public function cliente($index = 0)
    {
        if ($index < 0 || $index > count($this->clients) - 1) {
            echo "Client '$index' not found";
            return;
        } else {
            echo "Name:" . $this->clients[$index]['name'] . "<br>";
            echo "Rank:" . $this->clients[$index]['rank'] . "<br>";
        }
    }
}

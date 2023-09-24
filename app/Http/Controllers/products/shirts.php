<?php

namespace App\Http\Controllers\products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class shirts extends Controller
{
    function shirts($s)
    {
        echo "Shirts $s.";
    }
}

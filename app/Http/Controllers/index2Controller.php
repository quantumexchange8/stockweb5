<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class index2Controller extends Controller
{
    public function index() 
    {
        return view('/index-2');
        // return 'I am index';
    }
}

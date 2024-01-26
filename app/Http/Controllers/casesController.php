<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class casesController extends Controller
{
    public function cases() 
    {
        return view('/cases');
        // return 'I am index';
    }
}

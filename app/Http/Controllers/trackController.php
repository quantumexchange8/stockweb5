<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class trackController extends Controller
{
    public function cases() 
    {
        return view('/cases');
        // return 'I am index';
    }
}

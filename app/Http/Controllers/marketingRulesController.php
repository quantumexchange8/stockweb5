<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class marketingRulesController extends Controller
{
    public function marketingrules() 
    {
        return view('/marketing-rules');
        // return 'I am index';
    }
}

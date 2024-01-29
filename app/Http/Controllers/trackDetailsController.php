<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class trackDetailsController extends Controller
{
    public function trackdetails() 
    {
        return view('/track-details');
        // return 'I am index';
    }
}

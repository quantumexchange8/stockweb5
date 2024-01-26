<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class casesDetailsController extends Controller
{
    public function casesdetails() 
    {
        return view('/cases-details');
        // return 'I am index';
    }
}

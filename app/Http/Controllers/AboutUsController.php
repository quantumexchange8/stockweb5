<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AboutUsController;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function aboutus()
    {
        // return view('aboutus');
        return 'Hey! This is AboutUs';
    }
}

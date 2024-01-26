<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class financialAdviceController extends Controller
{
    public function financialadvice() 
    {
        return view('/financial-advice');
        // return 'I am index';
    }
}

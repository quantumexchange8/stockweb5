<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blogPostsController extends Controller
{
    public function blogposts() 
    {
        return view('/blog-posts');
        // return 'I am index';
    }
}

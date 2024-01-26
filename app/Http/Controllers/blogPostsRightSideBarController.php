<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blogPostsRightSideBarController extends Controller
{
    public function blogpostsrightsidebar() 
    {
        return view('/blogposts-rightsidebar');
        // return 'I am index';
    }
}

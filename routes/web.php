<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Index2Controller;
use App\Http\Controllers\financialAdviceController;
use App\Http\Controllers\marketingRulesController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\faqController;
use App\Http\Controllers\casesController;
use App\Http\Controllers\casesDetailsController;
use App\Http\Controllers\blogPostsController;
use App\Http\Controllers\blogPostsRightSideBarController;
use App\Http\Controllers\contactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Ori route path
// Route::get('/', function () {
//     return view('welcome');
// });

/**Don't have auth or home route here (5.13/19.05) */
// Path shared on youtube
// Route::prefix('admin')->group(function () {

//     Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
// });

// First page
Route::get('/', function () {
    return view('index');
});

//sec page
Route::get('/index-2', function () {
    return view('index2');
});

// services page (1)
Route::get('/financial-advice', function () {
    return view('financial-advice');
});

// services page (2)
Route::get('/marketing-rules', function () {
    return view('marketing-rules');
});

// About us page 
Route::get('/about-us', function () {
    return view('aboutus');
});

//FAQ page
Route::get('/faq', function () {
    return view('faq');
});

//track page
Route::get('/track', function () {
    return view('track');
});

// track details 
Route::get('/track-details', function () {
    return view('trackdetails');
});

// blog posts 
Route::get('/blog-posts', function () {
    return view('blogposts');
});

// blog right-side bar posts 
Route::get('/blogposts-rightsidebar', function () {
    return view('blogposts-rightsidebar');
});

// contact page 
Route::get('/contact', function () {
    return view('contact');
});

// Route::get('/contact-us', function () {
//     return view('welcome');
// });

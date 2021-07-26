<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Blog\CommentController;
use App\Http\Controllers\Blog\BlogController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|---------------------------
| MixedWeb Project (GeoLab Training)
|---------------------------
*/

Route::middleware('auth')->group(function(){

    Route::get('/index', 'HomeController@index')->name('index');

    Route::get('about', function()
    { 
        return view('mixedweb.navbar.about');
    })->name('about');
    
    Route::get('blog', 'Blog\BlogController@index')->name('blog');
    
    Route::get('shopping', function()
    {
        return view('mixedweb.navbar.shopping');
    })->name('shopping');
    
    Route::get('contact', function()
    {
        return view('mixedweb.navbar.contact');
    })->name('contactUs');
    
    Route::prefix('blog')->name('blogs.')->group(function(){
        Route::get('create', [BlogController::class, 'create'])->name('create');
        Route::post('/', [BlogController::class, 'store'])->name('post');
        Route::get('show/{id}', [BlogController::class, 'show']);
        Route::post('comments/{id}', [CommentController::class, 'store'])->name('post_comment');
    });
});

/*
*---------------------------
* "Laravel" learn section
*---------------------------
*/

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');

// redirects to default page if the page for searching  not found
Route::fallback(function () {
    return view('sorry.sorry');
});
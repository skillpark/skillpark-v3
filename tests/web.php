<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/post-project', function () {
    return view('/postproject');
});

Route::get('/about', function () {
    return view('about.about');
});

Route::get('/enterpise', function () {
    return view('about.enterpise');
});

// |=================LOGGED-IN USER==========================|
Auth::routes();

Route::post('/home', 'UserController@store'); //Store Default Profile Picture
Route::get('/home', 'HomeController@index'); //default user login landing page

Route::group(['middleware' => ['auth']], function () {

    Route::group(['middleware' => ['client']], function () {
        Route::get('/client', function () {
            return view('clients.home'); 
        })->name('client');;

    });

    Route::group(['middleware' => ['freelancer']], function () {
        Route::get('/home', 'Freelancer\FreelancerController@home')->name('home');
        Route::get('/dashboard', 'Freelancer\FreelancerController@dashboard');
        Route::get('/settings', 'Freelancer\FreelancerController@settings');
        Route::get('/task', 'Freelancer\FreelancerController@task');
    });
});
// |=================LOGGED-IN USER END==========================|

// Social Auth
Route::get('auth/social', 'Auth\SocialAuthController@show')->name('social.login');
Route::get('oauth/{driver}', 'Auth\SocialAuthController@redirectToProvider')->name('social.oauth');
Route::get('login/{driver}/callback', 'Auth\SocialAuthController@handleProviderCallback')->name('social.callback');

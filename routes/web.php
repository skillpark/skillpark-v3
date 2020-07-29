<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/how-it-works', function () {
    return view('about.about');
});

//creators of SKILLPARK (sushant,divesh,nitika)
Route::get('/creators', function () {
    return view('about.creators');
});

Route::get('/contact', function () {
    return view('about.contact');
});

Route::get('policy', function () {
    return view('about.terms');
});


// |=================LOGGED IN USER==========================|

Auth::routes(['verify' => true]);

Route::get('register/user-information', 'Auth\ProfileInfoController@showProfile')->middleware('verified');
Route::post('register/user-information', 'Auth\ProfileInfoController@addProfile')->name('addprofile');
//user feeds
Route::get('/home', 'HomeController@index')->middleware('verified')->name('home');
Route::post('/home', 'UserController@store');

Route::get('/client', function () {
    return view('clients.home');
})->name('client')->middleware('verified');

Route::get('/freelancer', function () {
    return view('freelancers.home');
})->name('freelancer')->middleware('verified');

Route::get('/project', function () {
    return view('tasks.task');
})->middleware('verified');

Route::get('/profile', function () {
    return view('freelancers.profile');
})->middleware('verified');

Route::get('/user', function () {
    return view('clients.freelancer-profile');
})->middleware('verified');

Route::middleware(['verified','freelancer'])->group(function () {
    
});

Route::middleware(['verified', 'client'])->group(function () {

});

// Social Auth
Route::get('auth/social', 'Auth\SocialAuthController@show')->name('social.login');
Route::get('oauth/{driver}', 'Auth\SocialAuthController@redirectToProvider')->name('social.oauth');
Route::get('login/{driver}/callback', 'Auth\SocialAuthController@handleProviderCallback')->name('social.callback');

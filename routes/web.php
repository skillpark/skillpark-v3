<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/how-it-works', function () {
    return view('about.about');
});

//creators of SKILLPARK 
Route::get('/creators', function () {
    return view('about.creators');
});

Route::get('/contactus', function () {
    return view('about.contact');
});

// |=================LOGGED IN USER==========================|

Auth::routes(['verify' => true]);
//registration
//select-profile
Route::get('register/select-profile', 'Auth\ProfileInfoController@showProfile');
Route::post('register/select-profile', 'Auth\ProfileInfoController@addProfile')->name('addprofile');
//add details
//freelancer
Route::get('fp/user-details', 'ProfileDetailsController@freelancerProfileDetails');
Route::post('fp/user-details', 'Auth\ProfileDetailsController@addfreelancerProfileDetails')->name('freelancerdetails');
//client
Route::get('cp/user-details', 'ProfileDetailsController@clientProfileDetails');
Route::post('cp/user-details', 'Auth\ProfileDetailsController@addclientProfileDetails')->name('clientdetails');
//end registration
//user feeds
Route::get('/home', 'HomeController@index')->middleware('verified')->name('home');
Route::post('/home', 'UserController@store');

Route::get('/dashboard', 'Freelancer\FreelancerController@dashboard')->middleware('verified');
Route::get('/task', 'Freelancer\FreelancerController@task')->middleware('verified');

Route::get('/client', function () {
    return view('/clients.home');
})->Middleware(['client'])->name('client');

// Social Auth
Route::get('auth/social', 'Auth\SocialAuthController@show')->name('social.login');
Route::get('oauth/{driver}', 'Auth\SocialAuthController@redirectToProvider')->name('social.oauth');
Route::get('login/{driver}/callback', 'Auth\SocialAuthController@handleProviderCallback')->name('social.callback');


// MAIL_MAILER=smtp
// MAIL_HOST=smtp.mailtrap.io
// MAIL_PORT=2525
// MAIL_USERNAME=f284aa9a716742
// MAIL_PASSWORD=70566876a2ab3c
// MAIL_ENCRYPTION=tls
// MAIL_FROM_ADDRESS=sushantpaudel@gmail.com
// MAIL_FROM_NAME="${APP_NAME}"
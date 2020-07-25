<?php

namespace App\Http\Controllers\Auth;

use App\City;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;

class ProfileInfoController extends Controller
{
    public function __construct()
    {
        $this->middleware([
            'auth',
            'verified',
        ]);
    }

    public function showProfile()
    {
        $cities = City::all();
        return view('auth.register-info', compact('cities')); 
    }


    public function addProfile(Request $request)
    {
        $user = \App\User::find(Auth::user()->id);
        $role_id = $request['role_id'];

        $user->roles()->detach();
        $user->roles()->attach($role_id);

        if (Auth::user()->usertype == 'client') {
            return redirect()-> route('client');
        } else {
            return redirect()-> route('freelancer');
        }
    }
}

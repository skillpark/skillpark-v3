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
        
    }
}

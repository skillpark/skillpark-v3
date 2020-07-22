<?php

namespace App\Http\Controllers\Auth;

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
        return view('auth.addinfo');   
    }

    public function addProfile(Request $request)
    {
        $user = \App\User::find(Auth::user()->id);
        $role_id = $request['role_id'];

        $user->roles()->detach();
        $user->roles()->attach($role_id);

        if (Auth::user()->roles() == 'freelancer') {
            return (redirect()-> route('freelancerdetails'));
        } else {
            return (redirect()-> route('clientdetails'));
        }
    }
}

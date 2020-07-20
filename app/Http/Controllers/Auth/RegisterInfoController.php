<?php

namespace App\Http\Controllers\Auth;

use App\City;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;

class RegisterInfoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'about' => ['required', 'string', 'min:50', 'max:255'],
            'city_id' => ['required'],
        ]);
    }

    public function showForm()
    {
        $cities = City::all();
        return view('auth.addinfo', compact('cities'));
        return view('userprofile.settings', compact('cities'));
    }

    public function postForm(Request $request)
    {
        auth()->user()->update($request->only(['about', 'city_id']));

        $user = \App\User::find(Auth::user()->id);
        $role_id = $request['role_id'];

        $user->roles()->detach();
        $user->roles()->attach($role_id);

        if (Auth::user()->roles() == 'freelancer') {
            return route('freelancer');
        } else {
            return(redirect()-> route('client'));
        }
    }
}

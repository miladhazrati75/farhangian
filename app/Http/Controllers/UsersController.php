<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    //
    public function login()
    {
//        print 2;
        return view('site.login.login');

    }

    public function register()
    {

    }

    public function doLogin(Request $request)
    {

        $credentials = [
            'name' => $request['name'],
            'password' => $request['password'],
        ];

        if (Auth::attempt($credentials)) {

            return redirect('/');
        } else {
            return redirect()->back()->with('loginError', 'نام کابری یا گذرواژه شما نادرست می باشد');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Role;
use Hash;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    public function postLogin(Request $request)
    {
        $this->validate(request(),[
            'username' => 'required',
            'password' => 'required'
        ]);


        if (! Auth()->attempt(request(['username','password']))){
            return back()->withErrors([
                'error'=>'Datos incorrectos'
            ]);
        }
        /*dd(Auth::user()->name);*/
        return redirect()->back();

    }

    public function getLogout(){
        Auth::logout();
        return redirect()->route('index');
    }

}

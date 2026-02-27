<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginForm()
    {
        return view('auth.login');
    }
    public function login(Request $request){
        $user = Auth::attempt([
            'email'=>$request->email,
            'password'=>$request->password,
        ]);
        if(!$user){
            return redirect('/login');
        }
        return redirect('/categories');
    }
}

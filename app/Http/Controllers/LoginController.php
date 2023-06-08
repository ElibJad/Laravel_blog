<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function show(){
        return view('login.loginUser');
    }

    public function login(Request $request){
        $email = $request->email;
        $password = $request->password;
        $credentials = ['email'=> $email, 'password'=> $password];

        // dd(Auth::attempt($credentials));
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return to_route('users.index')->with('success', 'Vous etes bien connecter .');
        }else{
            return back()->withErrors([
                'email'=> 'Email ou mot de passe incorrect .'
            ])->onlyInput('email'); 
        }
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return to_route('login')->with('success', 'Vous etes deconnecter avec success');
    }
}

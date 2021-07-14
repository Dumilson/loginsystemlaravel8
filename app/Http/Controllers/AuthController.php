<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function dashboard(){
        if(Auth::check() === true){
            $user = Auth::user();
            return view('admin.dashboard',compact('user'));
        }
        return redirect()->route('admin.login');
    }

    public function showLoginForm(){
        return view('admin.formLogin');
    }

    public function login(Request $request){
        
        if(!filter_var($request->email, FILTER_VALIDATE_EMAIL)){
            return redirect()->back()->withInput()->withErrors(['O email informado não é valido']);
        }
        $dados = [
            'email'=> $request->email,
            'password'=>$request->password
        ];
        if(Auth::attempt($dados)){
            return redirect()->route('admin');
        }

        return redirect()->back()->withInput()->withErrors(['Os dados informado não conferem']);

    }

    public function logout(){
        Auth::logout();

        return redirect()->route('admin');
    }
}

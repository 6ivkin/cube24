<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class AuthController extends Controller
{
    function login(){
        if (Auth::check()){
            return redirect(route('home'));
        }
        return view('login');
    }

    function registration(){
        if (Auth::check()){
            return redirect(route('home'));
        }
        return view('registration');
    }

    function loginPost(Request $request) {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
            return redirect()->intended(route('home'));
        }
        return redirect(route('login'))->with("Ошибка!", "Не верно!");
    }

    function registrationPost(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'role' => 'string',
        ]);

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $data['role'] = $request->role;
        $user = User::create($data);
        if(!$user){
            return redirect(route('registration'))->with("Ошибка!", "Ошибка регистрации, попробуйте снова");
        }
        return redirect(route('login'))->with("Успешно", "Регистрация прошла успешно");
    }

    function logout(){
        Session::flash('name');
        Auth::logout();
        return redirect(route('login'));
    }
}

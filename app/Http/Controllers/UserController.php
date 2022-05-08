<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function loginForm()
    {
        return view('login-form');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
//        dd($request->all());
        $user = Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);
        if($user){
            session()->flash('success', 'Зайшов сюда сука');
            return redirect(route('cabinet'));
        }
        return back();
    }
    public function registerForm()
    {
        return view('register-form');
    }
    public function register(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed'
        ]);
        $user = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        if($user){
            Auth::login($user);
            session()->flash('success', 'Зарегався уєбан');
            return redirect(route('cabinet'));
        }
        return back();
    }

    public function logout(){
        Auth::logout();
        return back();
    }
}

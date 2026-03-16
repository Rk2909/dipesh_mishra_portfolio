<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    public function login()
    {
        return view('admin.auth.login');
    }
    public function register()
    {
        return view('admin.auth.register');
    }
    public function registerStore(Request $request)
    {
        User::create([
            "name" => $request->name,
            "email" => $request->email,            
            "password" => Hash::make($request->password)
        ]);
        return redirect()->route('auth.login');
    }
    public function loginCheck(Request $request)
    {
        //recaptcha varify
        $response = Http::asForm()->post(
        'https://www.google.com/recaptcha/api/siteverify',[
            "secret"=>env('RECAPTCHA_SECRET_KEY'),
            "response"=>$request->input('g-recaptcha-response'),
            "remoteip"=>$request->ip(),
        ]
        );
        $result =$response->json();
        if(!$result['success']){
            return back()->with('error','captcha varification is failed');
        }
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('admin.index')->with('success', 'login successful');
        }
        return back()->with('error', 'invalid credentials');
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login');
    }
}

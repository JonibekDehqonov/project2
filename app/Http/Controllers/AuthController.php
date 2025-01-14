<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Contracts\Service\Attribute\Required;

class AuthController extends Controller
{
    public function app(Request $request){
      dd($request);
    }
    public  function login()
    {
        return view('auth.login');
    }

    public function register()
    {
      
        return view('auth.register');
    }


    public function authenticate(Request $request)
    {
   
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],

        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => "The provided credentiales do not match our records",
        ]);
    }

    public function register_store(Request $request ){
  
       $validated= $request->validate([
            'name'=>'required',
            'email'=>'required|email:rfc,dns|unique:users,email',
            'password'=>'required|min:4|confirmed',
            // 'password_confirmation'=>'required|same:password',
        ]);
        $validated['password']=Hash::make($validated['password']);
    
        $user = User::create($validated);
        auth()->login($user);
        return redirect('/')->with('success',"Accaunt successfully registered ");
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}

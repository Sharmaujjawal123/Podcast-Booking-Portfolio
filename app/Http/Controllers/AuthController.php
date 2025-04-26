<?php

namespace App\Http\Controllers;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login() {
        return view('auth.login');
    }

    public function doLogin(Request $request) {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {

// 2) Authentication passed: now Auth::user() is not null
if (Auth::user()->email === 'ujjwalsharma7734@gmail.com') {
    // Admin user
    return redirect()->route('admin.payments');
}

// Regular user
return redirect()->intended('/')->with('success', 'Logged in successfully!');
}

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function register() {
        return view('auth.register');
    }

    public function doRegister(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ],
       ['email.unique' => 'User already exists with this email!',] );

        $user = new User();
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = Hash::make($request->password); // Don't forget to hash
    $user->save();

        Auth::login($user);
        Mail::to($user->email)->send(new WelcomeMail($user));
        if ($user->email === 'ujjwal@gmail.com') {
        // Redirect admin to the admin panel
        return redirect()->route('admin.payments');
    }
        return redirect('/')->with('success', 'Registered successfully!');
    }
}

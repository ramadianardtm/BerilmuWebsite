<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\user;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function dologin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/login')->withErrors($validator)->withInput();
        }

        $user = User::where('email', $request->email)->first();
        if (!$user || !Hash::check($request->password, $user->password)) {
            return redirect('/login')->withErrors(['login' => 'email atau password salah!'])->withInput();
        }
        auth()->login($user);

        return redirect('/homepage');
    }
    public function Authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => $request->email,
            'password' => $request->password,
            
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect('/homepage');
        }

        Session::flash('status', 'failed');
        Session::flash('message', 'login wrong!');

        return view('login');
    }
}

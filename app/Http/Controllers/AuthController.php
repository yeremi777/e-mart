<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $usernameField = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        if (Auth::attempt([$usernameField => $credentials['username'], 'password' => $credentials['password']])) {
            $request->session()->regenerate();
            return redirect()->intended('');
        }

        return back()->with('error', 'Login Failed!');
    }

    public function register(Request $request)
    {
        $validate = $request->validate([
            'username' => 'required',
            'name' => 'required',
            'email' => ['required', 'unique:users'],
            'password' => ['required', 'min:5'],
        ]);

        $validate['password'] = Hash::make($validate['password']);

        User::create($validate);

        return redirect('/login');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'current_password' => 'required',
            'new_password' => 'required'
        ]);

        $usernameField = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        $user = User::where($usernameField, $request->username)->first();

        if (!$user) {
            return back()->with('error', "Incorrect {$usernameField} and password!");
        }

        if (!Hash::check($request->current_password, $user->password)) {
            return back()->with('error', "Incorrect {$usernameField} and password!");
        }

        $user->password = Hash::make($request->new_password);
        $user->save();

        return redirect('/login')->with('success', 'Password reset successful');
    }
}

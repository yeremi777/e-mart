<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('id', 'asc')->get();

        if (!Auth::user()) {
            return view('page.index');
        }

        return view('page.index', [
            'user' => Auth::user(),
            'categories' => $categories
        ]);
    }

    public function help()
    {
        if (!Auth::user()) {
            return view('page.help', [
                'title' => 'FAQ'
            ]);
        }

        return view('page.help', [
            'title' => 'FAQ',
            'user' => Auth::user()
        ]);
    }

    public function login()
    {
        return view('auth.login', [
            'title' => 'Sign In'
        ]);
    }

    public function register()
    {
        return view('auth.register', [
            'title' => 'Sign Up'
        ]);
    }

    public function resetPassword()
    {
        return view('auth.reset-password', [
            'title' => 'Reset Password'
        ]);
    }
}

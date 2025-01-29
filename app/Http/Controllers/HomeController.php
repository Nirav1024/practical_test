<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect()->route('admin.login')->with('success', 'You Successfully logged out!');
    }
}

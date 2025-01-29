<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }
    public function register()
    {
        return view('admin.register');
    }
    public function register_do(Request $request)
    {
        // dd($request);
        $validator = Validator::make($request->all(), [
            'f_name' => 'required',
            'l_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed'
        ], [
            'f_name' => 'The first name field is required.',
            'l_name' => 'The last name field is required.',
            'password' => 'The password field and confirm password does not match.'
        ]);
        if ($validator->fails()) {
            return redirect()->route('admin.register')->withErrors($validator)->withInput();
        } else {
            $user = new User();
            $user->first_name = $request->f_name;
            $user->last_name = $request->l_name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->role = $request->role;
            $user->save();
            return redirect()->route('admin.login')->with('success', 'Your Registration successfully');
        }
    }
    public function login_do(Request $request)
    {
        // dd($request);
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|'
        ]);
        if ($validator->fails()) {
            return redirect()->route('admin.login')->withErrors($validator)->withInput();
        } else {
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                if (auth()->user()->role == 'admin') {
                    $session_array = session([
                        'first_name' => auth()->user()->first_name,
                        'last_name' => auth()->user()->last_name,
                        'role' => auth()->user()->role,
                    ]);
                    Session::put($session_array);
                    return redirect()->route('home');
                } else {
                    return redirect()->route('admin.login')->with('danger', 'You are not allowed to login from here');;
                }
            } else {
                return redirect()->route('admin.login')->with('danger', 'Please enter valid input');
            }
        }
    }
}

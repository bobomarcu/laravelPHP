<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    public function register(Request $request)
    {
        $admin = Admin::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);
        return redirect()->back()->with('messages', 'Registration successful. Welcome!');
    }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            // Authentication passed for admin, redirect to admin dashboard
            return redirect()->route('adminDashboardGET');
        }

        // Authentication failed, redirect back with errors
        return redirect()->back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout()
    {
        Auth::guard('admin')->logout();

        return redirect('/')->with('messages', 'Successfully logged out'); // Redirect to the desired page after logout
    }
}

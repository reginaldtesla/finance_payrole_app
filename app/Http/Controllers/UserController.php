<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //for logout session function
    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/login');
    }
    // for login session function
    public function login(Request $request)
    {
        $username = $request->input('loginname');
        $password = $request->input('loginpassword');

        // Dummy authentication logic (replace with real authentication)
        if ($username === 'admin' && $password === '1234567890') {
            // Store user information in session
            $request->session()->put('user', $username);
            return redirect('/dashboard')->with('success', 'Login successful');
        } else {
            return redirect('/')->with('error', 'Invalid credentials');
        }
    }

    // for signup session function



}

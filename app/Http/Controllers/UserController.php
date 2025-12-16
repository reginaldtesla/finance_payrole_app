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


    // for signup session function



}

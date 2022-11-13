<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    public function adminLoginView(){


        return view('admin.adminLogin');

    }

    public function adminLogin(Request $request){

        $request->validate([

            'email'    => 'required',
            'password' => 'required',

        ]);

        $email = $request->email;
        $pass  = $request->password;

        if (auth()->attempt(array('email' => $email, 'password' => $pass)))
        {
            return redirect()->route('Admin.Dashboard');
        }
        else
         {
            return back();
         }


    }
}

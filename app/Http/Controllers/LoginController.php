<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        if(session()->has('LoggedUser'))
        {
            session()->pull('LoggedUser');
        }
        return view('logintemplate');
    }
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|min:5',
            'password' => 'required|min:5',
        ]);

        $user_info = User::where('username', '=', $request->username)->first();

        if(empty($user_info)){
            return redirect()->back()->with('Fails', 'Sorry, we do not recognize your username!');
        }
        else{
            if(Hash::check($request->password, $user_info->password)){
                $request->session()->put('LoggedUser', $user_info);
                return redirect('/dashboard');
            }
            else{
                return redirect()->back()->with('Fails', 'Invalid credentials, Please try again!');
            }
        }
    }
}

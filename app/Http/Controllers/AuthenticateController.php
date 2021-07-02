<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AuthenticateController extends Controller
{
    public function login(){
        return view('login');
    }
    
    public function loginProcess(Request $request)
    {
        $email = $request->get('email');
        $password = $request->get('password');
        try {
            $admin = Admin::where('email',$email)->where('password',$password)->firstOrFail();
            $request->session()->put('id',$admin->codeAdmin);
            return Redirect::route('dashboard');
        }catch(Exception $e){
            return Redirect::route('login')->with('error',"Tài khoản hoặc mật khẩu bị sai");
        }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return Redirect::route('login');

    }
}

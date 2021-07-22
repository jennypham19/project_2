<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Admin;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AuthenticateController extends Controller
{
    public function loginAdmin(){
        return view('login');
    }
    
    public function loginProcessAdmin(Request $request)
    {
        $email = $request->get('email');
        $password = $request->get('password');
        try {
            $admin = Admin::where('email',$email)->where('password',$password)->firstOrFail();
            $request->session()->put('id',$admin->codeAdmin);
            $request->session()->put('nameAdmin',$admin->nameAdmin);
            return Redirect::route('dashboard-admin');
        }catch(Exception $e){
            return Redirect::route('login-admin')->with('error',"Tài khoản hoặc mật khẩu bị sai");
        }
    }

    public function logoutAdmin(Request $request)
    {
        $request->session()->flush();
        return Redirect::route('login-admin');

    }

    public function loginUser()
    {
        return view('user.login');
    }

    public function loginProcessUser(Request $request)
    {
        $emailStudent = $request->get('email-student');
        $passStudent = $request->get('password-student');
        try {
            $student = Student::where('email',$emailStudent)->where('passWord',$passStudent)->firstOrFail();
            $request->session()->put('id',$student->studentCode);
            return Redirect::route('dashboard-student');
        } catch (Exception $e) {
            return Redirect::route('login-student')->with('error',"Tài khoản hoặc mật khẩu của bạn bị sai");
        }
    }

    public function logoutUser(Request $request)
    {
        $request->session()->flush();
        return Redirect::route('login-student');

    }
}

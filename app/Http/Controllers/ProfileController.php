<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProfileController extends Controller
{

    public function index()
    {
        $listAdmin = Admin::firstOrFail();
        return view('profile.profile',[
            'listAdmin'=>$listAdmin,
        ]);
    }

    public function editProfile($id)
    {
        $admin = Admin::find($id);
        return view('profile.edit-profile', [
            'admin' => $admin,
        ]);
    }

    public function editProfileProcess(Request $request, $id)
    {
        $email = $request->get('email');
        $fullName = $request->get('full-name');
        $admin = Admin::find($id);
        $admin->email = $email;
        $admin->fullName = $fullName;
        $admin->save();
        $request->session()->flash('alert-success', 'Profile was successful updated!');
        return Redirect::route('profile');
    }

    public function changePassword()
    {
        $admin = Admin::firstOrFail();
        return view('profile.change-password', [
            'admin' => $admin,
        ]);
    }

    public function changePasswordProcess(Request $request, $id)
    {
        $old_password = $request->get('current_password');
        $new_password = $request->get('new_password');
        $new_password_confirmation = $request->get('new_password_confirmation');
        $admin = Admin::find($id);
        if ($old_password == $admin->password) {
            if ($new_password == $new_password_confirmation) {
                $admin->password = $new_password;
                $admin->save();
                return Redirect::route('change-password', $admin->codeAdmin)->with('success', 'Password successfully updated');
            } else {
                return Redirect::route('change-password', $admin->codeAdmin)->with('error1', 'New password confirmation is not matched with new password');
            }
        } else {
            return Redirect::route('change-password', $admin->codeAdmin)->with('error', "Current password is not matched with old password");
        }
    }
}

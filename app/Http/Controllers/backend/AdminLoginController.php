<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\AdminLoginModel;
use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    public function index()
    {
        return view('backend.login');
    }

    public function changeCredentials(Request $request, $id)
    {
        $admin = AdminLoginModel::where('id', $id)->first();
        $request->validate([
            'currentpassword' => 'required',
            'newpassword' => 'required|min:6',
            'renewpassword' => 'required|same:newpassword',
        ]);

        if (!$admin) {
            return redirect()->back()->with('error', 'Admin not found');
        }

        if ($request->currentpassword !== $admin->password) {
            return redirect()->back()->with('error', 'Current password is incorrect');
        }

        $admin->password = $request->newpassword;
        $admin->securepassword = md5($request->newpassword);
        $admin->ipaddress = $request->ip();
        $admin->save();

        return redirect()->back()->with('success', 'Credentials changed successfully');
    }

    public function onlogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $admin = AdminLoginModel::where('username', $request->input('username'))->first();

        if ($admin && $admin->securepassword === md5($request->input('password'))) {
            session()->put('id', $admin->id);
            session()->put('username', $admin->username);
            session()->put('email', $admin->email);

            return redirect('/admin');
        } else {
            return redirect('/admin/login')->withErrors('Invalid username or password');
        }
    }

}

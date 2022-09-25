<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AppController extends Controller
{
    public function index() {
        return view('index');
    }

    public function goLogin() {
        return view('auth.login');
    }

    public function goRegister() {
        return view('auth.register');
    }

    public function goProfile() {
        return view('auth.account-settings');
    }

    public function checkLogin(Request $request) {
        $call_center = array(
            'username' => $request->input('username'),
            'password' => $request->input('password'),
        );

        if (Auth::guard('accountant')->attempt($call_center)) {
            return Redirect::intended('/');
        }
        return redirect()->back()->with(['error' => 'Your Email Or Your Password Is Wrong'])->withInput($request->all());
    }

    public function logout(Request $request) {
        auth()->logout();
        return redirect()->route('login');
    }

    public function updateProfile(Request $request) {
        $user = Login::find(auth()->user()->id);
        $user->update([
            'name' => $request->name,
            'username' => $request->username,
        ]);

        if ($request->password != '') {
            $user->update([
                'password' => bcrypt($request->password),
            ]);
        }
        return redirect()->back()->with('success', 'Profile Updated Successfully');
    }
}

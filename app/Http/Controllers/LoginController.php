<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function postlogin(Request $request)
    {
        // dd($request->all());
        if (Auth::guard('pengguna')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('Beranda');
        } elseif (Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('Beranda');
        }
        return redirect('/login');
    }

    public function logout(Request $request)
    {
        if (Auth::guard('pengguna')->check()) {
            Auth::guard('pengguna')->logout();
        } elseif (Auth::guard('user')->check()) {
            Auth::guard('user')->logout();
        }
        return redirect('/');
    }
}

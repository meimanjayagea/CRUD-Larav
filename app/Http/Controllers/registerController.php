<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registerController extends Controller
{
    public function postRegistrasi(Request $request)
    {
        // dd($request->all());
        // return redirect('/');
        return view('Pengguna.registrasi');
    }

    public function CreateUser(Request $request){
        $user = User::all();

    }
}

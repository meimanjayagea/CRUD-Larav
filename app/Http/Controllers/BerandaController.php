<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $var_beranda = "CrudID";
        return view('Dashboard.Beranda', compact('var_beranda'));
    }

    public function halamansatu()
    {
        return view('Halaman.Halaman-satu');
    }

    public function halamandua()
    {
        return view('Halaman.Halaman-dua');
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}

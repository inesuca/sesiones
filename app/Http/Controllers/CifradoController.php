<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CifradoController extends Controller
{
    public function index()
    {
        return view('/cookies/index');
    }

    public function create()
    {
        return view('/cookies/create');
    }

    public function store(Request $request)
    {
        dd($request->all());
    }
}

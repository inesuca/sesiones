<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SesionController extends Controller
{

  public function index()
  {
    return view('/sesiones/index');
  }

  public function create()
  {
    return view('/sesiones/create');
  }

  public function store(Request $request)
  {
    //dd($request-> all());

    $alumnos = session('alumnos', []);


    $alumno = [
      'email' => $request->email,
      'password' => $request->password,
      'name' => $request->name
    ];

    $alumnos = [$alumno];

    //session()->put('alumno',$alumno); 

    // session(['alumno' => $alumnos]);
    // dd(session()->all());

    return redirect('/sesiones/index');
  }

  public function edit($pos){
    $alumnos = session('alumnos');
    return view ('sesiones/editar')->with('alumno',$alumnos[$pos])->with('pos',$pos);
  }

  public function update($pos, Request $request){
    $alumnos = session('alumnos');
    $alumno=$alumnos[$pos];
    $alumno['email']=$request->email;
    $alumno['password']=$request->password;
    $alumno['name']=$request->name;
    $alumno4[$pos]=$alumno;
    session()->put('alumnos',$alumnos);
    return redirect('/sesiones/index');
  }
}

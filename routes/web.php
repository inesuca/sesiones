<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SesionController;
use App\Http\Controllers\CookiesController;
use App\Http\Controllers\CifradoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::view('/template','/template');
// Route::view('/sesiones/create','/sesiones/create');
// Route::view('/sesiones/index','/sesiones/index');
Route::get('/sesiones/index',[SesionController::class,'index']);

Route::get('/sesiones/create',[SesionController::class,'create']);
Route::post('/sesiones/guardar',[SesionController::class,'store']);

Route::get('/sesiones/editar/{pos}',[SesionController::class,'edit']);
Route::put('/sesiones/actualizar/{pos}',[SesionController::class,'update']);

Route::get('/sesiones/mostrar',[SesionController::class,'show']);
Route::delete('/sesiones/borrar',[SesionController::class,'destroy']);
<?php

use App\Http\Controllers\AuthverificarController;
use App\Http\Controllers\MascotaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

#inicio de sesión
//ruta para el registro de usuarios
Route::post('/auth/register',[AuthverificarController::class,'register']);
//ruta para el login de usuarios
    Route::post('/auth/login',[AuthverificarController::class,'login']);
//Ruta para el logout de Usuario
    Route::post('/auth/logout',[AuthverificarController::class,'logout'])->middleware('auth:sanctum');
#fin inicio de sesión


#mascotas
    //mostrar mascotas
    Route::get('mascotas',[MascotaController::class,'index']);
    //editar mascotas
    Route::put('mascotas/{id}',[MascotaController::class,'update']);
    //crear mascotas
    Route::post('/register/mascotas',[MascotaController::class,'store']);
    //elimiinar mascotas
    Route::delete('mascotas/{id}',[MascotaController::class,'destroy']);

#FIN mascotas


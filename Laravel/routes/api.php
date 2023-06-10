<?php

use App\Http\Controllers\adulto_responsableController;
use App\Http\Controllers\childrenController;
use App\Http\Controllers\ficha_childController;
use App\Http\Controllers\motivo_ingresoController;
use App\Http\Controllers\AuthController;
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



# RUTAS PROTEGIDAS - PASAR TOKEN 

Route::middleware(['auth:sanctum'])->group(function () {

    ## Logout

    Route::get('logout',[ AuthController::class, 'logout']);

    ## Adulto responsable


});

//Route::get('/adulto_responsable/create',[ AdultoResponsableController::class, 'create']);


# Users

Route::post('register',[ AuthController::class, 'register']);
Route::post('login',[ AuthController::class, 'login']);


# AdultoResponsable Metodos

Route::post('adulto_responsable',[ adulto_responsableController::class, 'store']);
Route::get('adulto_responsable/show_all',[ adulto_responsableController::class, 'index']);

#Route::get('adulto_responsable/show_all',[ adulto_responsableController::class, 'index']);




# Niños metodos

Route::post('children',[ childrenController::class, 'store']);

Route::post('children/addmotivo',[ childrenController::class, 'addMotivo']);


# Ficha metodos

Route::post('ficha_child',[ ficha_childController::class, 'store']);



Route::post('motivo_ingreso',[ motivo_ingresoController::class, 'store']);

# Protegidas





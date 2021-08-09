<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Admins
Route::get("admins/get", [AdminsController::class, "getAdmins"]);
Route::get("admins/post", [AdminsController::class, "crearAdmin"]);
Route::get("admins/delete", [AdminsController::class, "eliminarAdmin"]);
Route::get("admins/update", [AdminsController::class, "actualizarAdmin"]);

//Clientes
Route::get("clientes/get", [ClientesController::class, "getClientes"]);
Route::get("clientes/post", [ClientesController::class, "crearCliente"]);
Route::get("clientes/delete", [ClientesController::class, "eliminarCliente"]);
Route::get("clientes/update", [ClientesController::class, "actualizarCliente"]);

//Herramientas
Route::get("herramientas/get", [HerramientasController::class, "getHerramientas"]);
Route::get("herramientas/post", [HerramientasController::class, "crearHerramienta"]);
Route::get("herramientas/delete", [HerramientasController::class, "eliminarHerramienta"]);
Route::get("herramientas/update", [HerramientasController::class, "actualizarHerramienta"]);
Route::get("herramientas/fitre",[HerramientasController::class, "filtrarHerramientas"]);

//Materiales
Route::get("materiales/get", [MaterialesController::class, "getMateriales"]);
Route::get("materiales/post", [MaterialesController::class, "crearMateriales"]);
Route::get("materiales/delete", [MaterialesController::class, "eliminarMateriales"]);
Route::get("materiales/update", [MaterialesController::class, "actualizarMateriales"]);
Route::get("materiales/fitre",[MaterialesController::class, "filtrarMateriales"]);
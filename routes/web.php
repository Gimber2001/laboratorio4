<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\SuscripcionesController;
use Illuminate\Support\Facades\Route;

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


Route::get("/login", [ClienteController::class, "formLogin"])->name("login");
Route::post("/login", [ClienteController::class, "processLogin"]);
Route::get("/home", [ClienteController::class, "home"])->name("home");


Route::get("/cliente/registrar", [ClienteController::class, "formRegistrar"]);
Route::post("/cliente/registrar", [ClienteController::class, "processRegistrar"]);


Route::get("/suscripcion/registrar", [SuscripcionesController::class, "formRegistrar"]);
Route::post("/suscripcion/registrar", [SuscripcionesController::class, "processRegistrar"]);

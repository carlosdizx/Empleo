<?php

use App\Http\Controllers\EgresadoController;
use App\Http\Controllers\EspecialidadController;
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
    return redirect("/egresado");
});

Route::resource('egresado',EgresadoController::class);

Route::resource('especialidad',EspecialidadController::class);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\LocalidadesController;
use App\Http\Controllers\ZonasController;
use App\Models\User;
use Illuminate\Routing\RouteRegistrar;
use Illuminate\Support\Facades\DB;

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

Route::get('/',[ClientesController::class,'index'])->middleware('auth');

Route::resource('localidades',LocalidadesController::class);

Route::resource('clientes',ClientesController::class);

Route::resource('zonas',ZonasController::class);

//---------------------ruta de la pagina pdf-----------------

Route::get('/pdf/{cliente}',[ClientesController::class,'crearPDF'])->name('pdf');

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');*/

require __DIR__.'/auth.php';
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\EditorialController;
use App\Http\Controllers\SendEmailController;
use App\Http\Controllers\IncidenciaController;
use App\Http\Controllers\UsuarioController;


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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/incidencias', [IncidenciaController::class, 'index']);

Route::get('/incidencias/crear', [IncidenciaController::class, 'create'])->middleware(['auth']);

Route::post('/incidencias/crear', [IncidenciaController::class, 'store'])->middleware(['auth']);


Route::get('/perfil', [UsuarioController::class, 'index']);

Route::get('/perfil/ver/{idUsuario}', [UsuarioController::class, 'show'])->middleware(['auth']);

Route::get('/perfil/editar/{idUsuario}', [UsuarioController::class, 'edit'])->middleware(['auth']);

Route::post('/perfil/editar/{idUsuario}', [UsuarioController::class, 'update'])->middleware(['auth']);










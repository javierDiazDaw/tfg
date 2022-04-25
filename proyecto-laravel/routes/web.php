<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\EditorialController;
use App\Http\Controllers\SendEmailController;


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

Route::get('/libros', [LibroController::class, 'index']);

Route::get('/libros/crear', [LibroController::class, 'create'])->middleware(['auth']);

Route::post('/libros/crear', [LibroController::class, 'store'])->middleware(['auth']);

Route::get('/libros/ver/{isbn}', [LibroController::class, 'show'])->middleware(['auth']);

Route::get('/libros/editar/{isbn}', [LibroController::class, 'edit'])->middleware(['auth']);

Route::post('/libros/editar/{isbn}', [LibroController::class, 'update'])->middleware(['auth']);

//crear editorial

Route::get('/editorials/crear', [EditorialController::class, 'create'])->middleware(['auth']);

Route::post('/editorals/crear', [EditorialController::class, 'store'])->middleware(['auth']);

//Email

Route::get('/sendEmail', [SendEmailController::class, 'recibirLibro']);

Route::post('/sendEmail/enviarEmail', [SendEmailController::class, 'index']);

//mostrar peticiones

Route::get('/librosPedidos', [SendEmailController::class, 'mostrarPeticiones'])->middleware(['auth']);

//PDF
//isbn y titulo
Route::get('/GenerarPDFTablaCom', [LibroController::class, 'PDFtablaCompleta']);

//tabla un libro
Route::get('/GenerarPDFDetalle/{isbn}', [LibroController::class, 'PDFDetalle']);






<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controlusuario;
use App\Http\Controllers\controlpublicaciones;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/publicar', function () {
    return view('publicacion');
});

Route::get('/perfil', function () {
    return view('perfil');
});

Route::get('/registrar', function () {
    return view('registrousuario');
});



// Rutas para el controlador de usuarios
Route::get('/guardarusuario', [controlusuario::class, 'guardaru'])->name('guardarusuario');

// Rutas para el controlador de publicaciones
Route::post('/guardarpublicacion', [controlpublicaciones::class, 'guardarp'])->name('guardarpublicacion');

Route::get('/', [controlpublicaciones::class,'index'])->name('home');
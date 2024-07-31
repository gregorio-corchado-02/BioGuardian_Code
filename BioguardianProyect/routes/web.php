<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controlusuarios;
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

Route::get('/publicar', function () {
    return view('publicacion');
});

Route::get('/perfil', function () {
    return view('perfil');
});

Route::get('/registrar', function () {
    return view('registrousuario');
});

Route::get('/login', function () {
    return view('login');
});



// Rutas para el controlador de usuarios
Route::post('/guardarusuario', [controlusuarios::class, 'guardaru'])->name('guardarusuario');

// Rutas para el controlador de publicaciones
Route::post('/guardarpublicacion', [controlpublicaciones::class, 'guardarp'])->name('guardarpublicacion');

Route::post('/editarpubli/{id}', [controlPublicaciones::class, 'editarpublicacion'])->name('publicacion.update');

Route::post('/editarelimi/{id}', [controlPublicaciones::class, 'eliminarpublicacion'])->name('publicacion.delete');

Route::get('/', [controlpublicaciones::class,'index'])->name('home');
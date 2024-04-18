<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CarreraController;
use App\Http\Controllers\NombreGrupoController;
use App\Http\Controllers\PeriodoController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\PermisosController;
use App\Http\Controllers\ExtracurricularController;
use App\Http\Controllers\TipoEventoController;
use App\Http\Controllers\GrupoController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistroGrupoController;

Route::get('/', function () {
    return view('welcome');
});
//este tiene que ser el main que salga
Route::resource('registroGrupo',RegistroGrupoController::class);

Route::resource('categoria', CategoriaController::class);

Route::resource('carrera', CarreraController::class);

Route::resource('nombreGrupo',NombreGrupoController::class);

Route::resource('periodo',PeriodoController::class);

Route::resource('rol',RolesController::class);

Route::resource('permiso',PermisosController::class);

Route::resource('extracurricular',ExtracurricularController::class);

Route::resource('tipoEvento',TipoEventoController::class);

Route::resource('grupo',GrupoController::class);

Route::get('registro',[RegistroController::class,'showRegistrationForm'])->name('registro');

Route::post('registro',[RegistroController::class,'register'])->name('register');

Route::get('login',[LoginController::class,'showLoginForm'])->name('registro');

Route::post('login',[LoginController::class,'loginUser'])->name('loginUser');
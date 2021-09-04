<?php

use Illuminate\Support\Facades\Route;
# Importar controladores: 
use App\Http\Controllers\homeController;
use App\Http\Controllers\cursoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
| De acuerdo al manual de Programación en Laravel, en este archivo solo van
| las rutas que redireccionan en la web, para los controltes y middleware
| usamos el resto de archivos: api, channels, console.
|
*/

Route::get('/', homeController::class);

Route::get('teoria', [cursoController::class, 'index']);

Route::get('teoria/crear', [cursoController::class, 'create']);

Route::get('teoria/{id}', [cursoController::class, 'show']);


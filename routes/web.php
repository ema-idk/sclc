<?php

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
    return view('home');
});

Route::resource('barberos','BarberosController');

Auth::routes();

Route::get('/citas', [App\Http\Controllers\EventoController::class, 'index']);
Route::get('/citas/mostrar', [App\Http\Controllers\EventoController::class, 'show']);

Route::post('/citas/consultar/{id}', [App\Http\Controllers\EventoController::class, 'edit']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

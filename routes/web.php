<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TbAndalalinController;
use App\Http\Controllers\TbRekomTController;
use App\Http\Controllers\StandarTekController;
use App\Http\Controllers\DbAdministratorController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [DbAdministratorController::class, 'home']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/info', [PagesController::class, 'info']);
Route::get('/status', [DbAdministratorController::class, 'status']);

Route::get('/users', [UserController::class, 'index'])->name('user.index');
Route::post('/users', [UserController::class, 'store']);
Route::get('/users/create', [UserController::class, 'create']);
Route::get('/users/{user}', [UserController::class, 'show']);
Route::delete('/users/{id}', [UserController::class, 'destroy']);
Route::put('/users/{id}', [UserController::class, 'update']);
Route::get('/users/{id}/edit', [UserController::class, 'edit']);

Route::get('/andalalin', [TbAndalalinController::class, 'index']);
Route::post('/andalalin', [TbAndalalinController::class, 'store']);
Route::get('/andalalin/create', [TbAndalalinController::class, 'create']);
Route::get('/andal', [TbAndalalinController::class, 'index2'])->name('andal.index');
// Route::get('/andal/action', [TbAndalalinController::class, 'action'])->name('andal.action');
Route::get('/andal/{id}', [TbAndalalinController::class, 'show'])->name('andal.show');
Route::put('/andal/{id}', [TbAndalalinController::class, 'update']);
Route::get('/andal/{id}/edit', [TbAndalalinController::class, 'edit']);

Route::get('/rekom-teknis', [TbRekomTController::class, 'index']);
Route::post('/rekom-teknis', [TbRekomTController::class, 'store']);
Route::get('/rekom-teknis/create', [TbRekomTController::class, 'create']);
Route::get('/rt', [TbRekomTController::class, 'index2'])->name('rt.index');
Route::get('/rt/{id}', [TbRekomTController::class, 'show'])->name('rt.show');
Route::put('/rt/{id}', [TbRekomTController::class, 'update']);
Route::get('/rt/{id}/edit', [TbRekomTController::class, 'edit']);

Route::get('/standar-tek', [StandarTekController::class, 'index']);
Route::post('/standar-tek', [StandarTekController::class, 'store']);
Route::get('/standar-tek/create', [StandarTekController::class, 'create']);
Route::get('/st', [StandarTekController::class, 'index2'])->name('st.index');
Route::get('/st/{id}', [StandarTekController::class, 'show'])->name('st.show');
Route::put('/st/{id}', [StandarTekController::class, 'update']);
Route::get('/st/{id}/edit', [StandarTekController::class, 'edit']);

Route::get('/login', [DbAdministratorController::class, 'login']);
Route::get('/admin', [DbAdministratorController::class, 'index']);

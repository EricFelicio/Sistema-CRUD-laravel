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

/* Conectando o controller especifico */
use App\Http\Controllers\EventController;

/* informando valor da rota do controller espeficico, para index*/
Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);
Route::post('/events', [EventController::class, 'show']);

Route::delete('events/delete{id}', [EventController::class, 'delete']);

Route::get('events/edit/{id}', [EventController::class, 'edit']);
Route::post('events/edit/', [EventController::class, 'update']);
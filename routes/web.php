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
use App\Http\Controllers\AgendaController;

/* informando valor da rota do controller espeficico, para index*/
Route::get('/', [AgendaController::class, 'index']);
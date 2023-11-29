<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculatorController;
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

Route::get('/', [CalculatorController::class,'calculator_home']);
Route::post('/ses', [CalculatorController::class,'calculator_history']);

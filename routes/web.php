<?php

use App\Http\Controllers\MenyController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [MenyController::class, 'hem']);

Route::get('/om-oss', [MenyController::class, 'omOss']);

Route::get('/spelningar', [MenyController::class, 'spelningar']);

Route::get('/kontakt', [MenyController::class, 'kontakt']);

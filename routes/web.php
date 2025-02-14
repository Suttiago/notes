<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
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
//auth routes

Route::get('/login', [AuthController::class,'login']);
Route::get('/logout',[AuthController::class,'logout']);
Route::post('/loginSubmit',[AuthController::class,'loginSubmit']);

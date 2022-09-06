<?php

use App\Http\Controllers\ProductController;
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


Route::get('/read',[ProductController::class,'read']);

Route::get('/showProduct/{id}',[ProductController::class,'showProduct']); 

Route::post('/products/store',[ProductController::class,'store']);

Route::post('/products/update',[ProductController::class,'update']);

Route::get('/delete/{id}',[ProductController::class,'delete']);

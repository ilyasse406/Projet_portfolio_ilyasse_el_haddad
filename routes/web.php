<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

Route::get('/',[HomeController::class,"index"])->name("welcome");
Route::get('/admin',[AdminController::class,"index"])->name("admin");




Route::resource("/facts", FactController::class);
Route::resource("/user", UserController::class);


// Route::resource("/",FactController::class);



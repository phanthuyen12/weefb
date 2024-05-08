<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use  App\Http\Controllers\HomeController;
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



Route::get('/', [App\Http\Controllers\HomeController::class, 'home']);
Route::get('/login',[UserController::class,'showFromLogin']);
Route::get('/register',[UserController::class,'showFromRegister']);
Route::get('/home',[HomeController::class,'home']);

//get
Route::post('/createcategory',[CategoryController::class,'createCategory']);
// post 
Route::post('/login',[UserController::class,'loginUser'])->name('loginUser');
Route::post('/register',[UserController::class,'registerUser'])->name('registerUser')->withoutMiddleware(['csrf']);
//
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\About;
use App\Http\Controllers\Courses;
use App\Http\Controllers\Login;
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

Route::get('/',[Home::class,'index']);
Route::get('/about',[About::class,'index']);
Route::get('/course',[Courses::class,'index']);
Route::get('/login',[Login::class,'index']);
Route::post('/login',[Login::class,'login']);
Route::get('/registration',[Login::class,'registration']);
Route::post('/registration',[Login::class,'register']);
Route::get('/view',[Login::class,'view']);
Route::get('/update/{id}',[Login::class,'update']);
Route::post('/update/{id}',[Login::class,'updateon']);
Route::get('/delete/{id}',[Login::class,'delete']);

<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\AdminController;
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

Route::get('/',[DonorController::class,"index"])->name("index");
Route::get('/book',[DonorController::class,"create"])->name("book")->middleware("auth");
Route::get('/appointments',[DonorController::class,"appointments"])->name("appointments")->middleware("auth");
Route::post('/update/{id}',[DonorController::class,"update"])->name("update")->middleware("auth");
Route::get('/edit/{id}',[DonorController::class,"show"])->middleware("auth");
Route::post('/',[DonorController::class,"store"])->middleware("auth");
Route::get('/thanks',[DonorController::class,"thanks"])->name("thanks")->middleware("auth");
Route::delete('/appointments/{id}',[DonorController::class,"destroy"])->middleware("auth");

Route::get('/admin',[AdminController::class,"index"])->name("admin.home")->middleware("isAdmin");
Route::get('/dashboard',[AdminController::class,"show"])->name("admin.dashboard")->middleware("isAdmin");
Route::get('/allusers',[AdminController::class,"users"])->name("admin.users")->middleware("isAdmin");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

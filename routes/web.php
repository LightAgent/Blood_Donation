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
// USER ROUTES START

Route::get('/',[DonorController::class,"index"])->name("index");
Route::get('/book',[DonorController::class,"create"])->name("book")->middleware("auth");
Route::get('/appointments',[DonorController::class,"appointments"])->name("appointments")->middleware("auth");
Route::post('/update/{id}',[DonorController::class,"update"])->name("update")->middleware("auth");
Route::get('/edit/{id}',[DonorController::class,"show"])->middleware("auth");
Route::post('/',[DonorController::class,"store"])->middleware("auth");
Route::get('/thanks',[DonorController::class,"thanks"])->name("thanks")->middleware("auth");
Route::delete('/appointments/{id}',[DonorController::class,"destroy"])->middleware("auth");

// USER ROUTES END

// ADMIN ROUTES START

Route::get('/admin',[AdminController::class,"index"])->name("admin.home")->middleware("isAdmin");
Route::get('/admin/confirm/{id}',[AdminController::class,"update"])->name("admin.update")->middleware("isAdmin");
Route::get('/dashboard',[AdminController::class,"show"])->name("admin.dashboard")->middleware("isAdmin");
Route::get('/allusers',[AdminController::class,"users"])->name("admin.users")->middleware("isAdmin");
Route::get('/confirmed',[AdminController::class,"confirmed"])->name("admin.confirmed")->middleware("isAdmin");
Route::get('/unconfirmed',[AdminController::class,"unconfirmed"])->name("admin.unconfirmed")->middleware("isAdmin");
Route::get('/allappointments',[AdminController::class,"allAppointments"])->name("admin.allappointments")->middleware("isAdmin");
// ADMIN ROUTES END

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

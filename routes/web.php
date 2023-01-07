<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::group(['middleware'=>'auth'], function(){ 
Route::get('/', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboardindex');
Route::get('/create', [\App\Http\Controllers\DashboardController::class, 'create'])->name('dashboardcreate');
Route::post('/create', [\App\Http\Controllers\DashboardController::class, 'store'])->name('dashboardstore');
Route::get('/edit/{id}', [\App\Http\Controllers\DashboardController::class, 'edit'])->name('dashboardedit');
Route::put('/update/{id}', [\App\Http\Controllers\DashboardController::class, 'update'])->name('dashboardupdate');
Route::get('/destroy/{id}', [\App\Http\Controllers\DashboardController::class, 'destroy'])->name('dashboardestroy');
  });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

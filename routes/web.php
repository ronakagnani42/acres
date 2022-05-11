<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminDashboard;
use App\Http\Controllers\addHomeController;
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

// defaults
Route::get('/',function(){
    return view('welcome');
});

// Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// // defaults over

Route::view('homie','admin.addHome');
Route::post('/addHome',[addHomeController::class,'addHomeForm']);
Route::get('/admin',[adminDashboard::class,'dashboard']);

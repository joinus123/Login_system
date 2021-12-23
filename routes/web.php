<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\CheckStatus;
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

// Route::get('/', function () {
//     return view('login');
// });

Route::get('/admin',[LoginController::class,'loginform'])->name('loginform');
Route::POST('/adduser',[LoginController::class,'adduser'])->name('adduser');
Route::post('loginprocess',[LoginController::class,'loginprocess'])->name('loginprocess');

Route::get('/',[HomeController::class,'home'])->name('home');

Route::middleware([CheckStatus::class])->group(function(){
Route::get('dashboard',[LoginController::class,'dashboard'])->name('dashboard');
});


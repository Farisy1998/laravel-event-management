<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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


Route::post('/registersave',[MainController::class,'save'])->name('registersave');
Route::post('/logincheck',[MainController::class,'check'])->name('logincheck');
Route::get('/logout',[MainController::class,'logout'])->name('logout');
Route::get('/about',[MainController::class,'about'])->name('about');

Route::group(['middleware'=>['UserCheck']],function(){
    Route::get('/login',[MainController::class,'login'])->name('login');
    Route::get('/register',[MainController::class,'register'])->name('register');
    Route::get('/userhome',[MainController::class,'home'])->name('userhome');
    Route::get('/profile',[MainController::class,'profile'])->name('profile');
});
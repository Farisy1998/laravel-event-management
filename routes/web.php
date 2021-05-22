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
Route::get('/admin_reg',[MainController::class,'admin_reg'])->name('admin_reg');
Route::post('/admin_save',[MainController::class,'admin_save'])->name('admin_save');
Route::get('/dashboard',[MainController::class,'dashboard'])->name('dashboard');

Route::group(['middleware'=>['UserCheck']],function(){
    Route::get('/login',[MainController::class,'login'])->name('login');
    Route::get('/register',[MainController::class,'register'])->name('register');
    Route::get('/userhome',[MainController::class,'home'])->name('userhome');
    Route::get('/profile',[MainController::class,'profile'])->name('profile');
    Route::get('/about',[MainController::class,'about'])->name('about');
    Route::get('/venues',[MainController::class,'venues'])->name('venues');
    Route::get('/photography',[MainController::class,'photography'])->name('photography');
    Route::get('/makeup',[MainController::class,'makeup'])->name('makeup');
    Route::get('/mehendi',[MainController::class,'mehendi'])->name('mehendi');
    Route::get('/decorations',[MainController::class,'decorations'])->name('decorations');
    Route::get('/weddingbooking',[MainController::class,'weddingbooking'])->name('weddingbooking');
    Route::get('/weddingevent',[MainController::class,'weddingevent'])->name('weddingevent');
    Route::get('/reg_payment',[MainController::class,'reg_payment'])->name('reg_payment');
});
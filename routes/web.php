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
Route::get('/register',[MainController::class,'register'])->name('register');

Route::group(['middleware'=>['UserCheck']],function(){
    Route::get('/',[MainController::class,'login'])->name('login');
    Route::get('/userhome',[MainController::class,'home'])->name('userhome');
    Route::get('/profile/{id}',[MainController::class,'profile'])->name('profile');
    Route::get('/edit_profile/{id}',[MainController::class,'edit_profile'])->name('edit_profile');
    Route::post('/update_profile/{id}',[MainController::class,'update_profile'])->name('update_profile');
    Route::get('/change_password/{id}',[MainController::class,'change_password'])->name('change_password');
    Route::get('/update_password/{id}',[MainController::class,'update_password'])->name('update_password');
    Route::get('/about',[MainController::class,'about'])->name('about');
    Route::get('/contact',[MainController::class,'contact'])->name('contact');
    Route::post('/enquire_save',[MainController::class,'enquire_save'])->name('enquire_save');
    Route::get('/venues',[MainController::class,'venues'])->name('venues');
    Route::get('/photoshoot',[MainController::class,'photoshoot'])->name('photoshoot');
    Route::get('/makeup',[MainController::class,'makeup'])->name('makeup');
    Route::get('/mehendi',[MainController::class,'mehendi'])->name('mehendi');
    Route::get('/decorations',[MainController::class,'decorations'])->name('decorations');
    Route::post('/wedding_event_save',[MainController::class,'wedding_event_save'])->name('wedding_event_save');
    Route::post('/reg_payment_save',[MainController::class,'reg_payment_save'])->name('reg_payment_save');
    Route::get('/banquet_booking',[MainController::class,'banquet_booking'])->name('banquet_booking');
    Route::post('/banquet_booking_save',[MainController::class,'banquet_booking_save'])->name('banquet_booking_save');
    Route::post('/wedding_banquet_save',[MainController::class,'wedding_banquet_save'])->name('wedding_banquet_save');
    Route::post('/party_venue_save',[MainController::class,'party_venue_save'])->name('party_venue_save');
    Route::get('/party_event',[MainController::class,'party_event'])->name('party_event');
});
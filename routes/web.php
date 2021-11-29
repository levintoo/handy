<?php

use App\Http\Controllers\HandyControllerController;
use App\Http\Livewire\UsersCOmponent;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', [HandyControllerController::class,'index']);
Route::get('/users', [HandyControllerController::class,'index']);
Route::get('/users/lv',UsersCOmponent::class);

Route::get('/','App\Http\Controllers\HandyControllerController@index');

Route::post('/store','App\Http\Livewire\UsersCOmponent@ajaxstore')->name('ajaxstore');
<?php

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

Route::get('/','Backendcontroller@dashboard')->name('dashboard');
   
Route::resource('items','ItemController');
// 7 (get-4,post-1,pull-1,delete-1)

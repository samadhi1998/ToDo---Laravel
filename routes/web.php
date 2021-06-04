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

Route::get('/', function () {
    return view('landing');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\EventController::class, 'index'])->name('home');
Route::post('addeventurl/store','App\Http\Controllers\EventController@store')->name('addevent.store');
Route::get('deleteeventurl/{id}','App\Http\Controllers\EventController@destroy');
Route::get('editeventurl/update/{id}','App\Http\Controllers\EventController@edit');
Route::post('/editeventurl','App\Http\Controllers\EventController@update');




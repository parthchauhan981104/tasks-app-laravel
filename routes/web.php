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
    return view('welcome');
});

Route::get('/tasks', 'TasksController@index')->name('tasks');

Route::get('/tasks/{task}', 'TasksController@show')->name('task');

Route::get('/tasks/{task}/complete', 'TasksController@complete')->name('complete');

Route::get('/new-task', 'TasksController@create')->name('new');
Route::post('/create', 'TasksController@store')->name('store');

Route::get('/tasks/{task}/edit', 'TasksController@edit')->name('edit');
Route::post('/update', 'TasksController@update')->name('update');

Route::get('/tasks/{task}/delete', 'TasksController@destroy')->name('delete');

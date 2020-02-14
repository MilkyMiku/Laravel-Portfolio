<?php

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
//
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();


Route::get('/', 'WelcomeController@index')->name('welcome');
Route::get('/home', 'HomeController@index');
Route::post('/tasks', 'TaskController@store');
Route::get('/tasks', 'TaskController@index')->name('tasks');
Route::delete('/tasks/{task}', 'TaskController@delete');
Route::put('/tasks/{task}', 'TaskController@update');
Route::get('/tasks/{task}', 'TaskController@edit');
Route::get('/blog', 'BlogController@index')->name('blog');
route::get('/blog/{blog}', 'BlogController@show');

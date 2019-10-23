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

Route::get('/', function () {
    return view('welcome');
});
//Route::get('/', 'TasksController@index');


//Route::get('/Task', 'TasksController@index');
Route::get('/Task', 'TasksController@index');
Route::post('/Task/create', 'TasksController@store');
Route::get('/Task/create', 'TasksController@create');
Route::get('/Task/{task}/edit', 'TasksController@edit');
Route::patch('/Task/{task}', 'TasksController@update');
Route::delete('/Task/{task}', 'TasksController@destroy');
//Route::get('/', 'PagesController@index');
//Route::get('/tasks', function () {
//    return view('task.tasks');
//});


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
//Route::resource('Task','TasksController');

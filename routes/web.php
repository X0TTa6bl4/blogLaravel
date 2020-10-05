<?php

use Illuminate\Support\Facades\Route;

Route::view('/','welcome');
Route::view('/about','about');


Route::get('/tasks', 'App\Http\Controllers\TasksController@index');
Route::get('/tasks/create', 'App\Http\Controllers\TasksController@create');
Route::get('/tasks/{task}', 'App\Http\Controllers\TasksController@show');
Route::post('/tasks', 'App\Http\Controllers\TasksController@store');
Route::get('/tasks/{task}/edit', 'App\Http\Controllers\TasksController@edit');
Route::patch('/tasks/{task}', 'App\Http\Controllers\TasksController@update');
Route::delete('/tasks/{task}', 'App\Http\Controllers\TasksController@destroy');


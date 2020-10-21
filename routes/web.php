<?php

use Illuminate\Support\Facades\Route;

Route::view('/','welcome');
Route::view('/about','about');

Route::get('/tasks/tags/{tag}', 'App\Http\Controllers\TagsController@index');

Route::resource('/tasks', 'App\Http\Controllers\TasksController');

Route::post('/tasks/{task}/steps', 'App\Http\Controllers\TaskStepsController@store');

Route::post('/completed-steps/{step}', 'App\Http\Controllers\CompletedStepsController@store');
Route::delete('/completed-steps/{step}', 'App\Http\Controllers\CompletedStepsController@destroy');

Route::get('/database', 'App\Http\Controllers\SelectDatabase@index');
Route::get('/database/{table}', 'App\Http\Controllers\SelectDatabase@select');

Auth::routes();


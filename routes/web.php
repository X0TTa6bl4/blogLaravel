<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks', 'App\Http\Controllers\TasksController@index');

Route::get('/tasks/create', 'App\Http\Controllers\TasksController@create');

Route::post('/tasks', 'App\Http\Controllers\TasksController@store');

Route::get('/tasks/{task}', 'App\Http\Controllers\TasksController@show');

Route::post('/tasks/{task}', 'App\Http\Controllers\TasksController@edit');

Route::post('/tasks/{task}/editing', 'App\Http\Controllers\TasksController@editing');

Route::get('/about', function () {
    return view('about');
});

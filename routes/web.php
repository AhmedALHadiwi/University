<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Route::controller(UserController::class)->get('users',"index");

// Route::resource('users',UserController::class);
// Route::resource('students',StudentController::class);
// Route::apiResource('users', UserController::class);


// Route::get('users',"UserController@index");

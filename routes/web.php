<?php

use App\Http\Controllers\DivisionController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\SubDivisionsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::resource('/users', UserController::class);
Route::resource('/divisions', DivisionController::class);
Route::resource('/subdivisions', SubDivisionsController::class);
Route::resource('/employees', EmployeeController::class);
Route::resource('/evaluations', EvaluationController::class);

Route::get('/', function () {
    return view('welcome');
});

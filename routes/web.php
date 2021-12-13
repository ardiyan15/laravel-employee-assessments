<?php

use App\Http\Controllers\ContractController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\ReportEmployee;
use App\Http\Controllers\SubDivisionsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::resource('/users', UserController::class);
Route::resource('/divisions', DivisionController::class);
Route::resource('/subdivisions', SubDivisionsController::class);
Route::resource('/employees', EmployeeController::class);
Route::resource('/evaluations', EvaluationController::class);
Route::resource('/contracts', ContractController::class);
Route::resource('/managers', ManagerController::class);
Route::get('/reportdivisionemployee', [ReportEmployee::class, 'reportdivisionemployee'])->name('report.reportdivisionemployee');
Route::get('/report', [ReportEmployee::class, 'report'])->name('report.employeestatus');

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

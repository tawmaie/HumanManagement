<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('dashboard');

Route::get('/employee-index', [EmployeeController::class, 'index'])->name('employee.index');

Route::get('/open-view/{name}', [EmployeeController::class, 'viewController'])->name('employee.view');

Route::post('/employee-create', [EmployeeController::class, 'create'])->name('employee.create');


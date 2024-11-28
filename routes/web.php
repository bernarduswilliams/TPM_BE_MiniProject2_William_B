<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [EmployeeController::class, 'welcome'])->name('welcome');

Route::post('/store', [EmployeeController::class , 'store'])->name('store');

Route::get('/create', [EmployeeController::class, 'createEmployee'])->name('createEmployee');



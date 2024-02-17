<?php

use App\Http\Controllers\EmployeeProfileController;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('form');
});

Route::post('/submit-name', [FormController::class, 'submitForm']);


Route::get('/employee-profiles', [EmployeeProfileController::class, 'index'])->name('employee-profiles.index');

Route::post('/employee-profiles', [EmployeeProfileController::class, 'storeNew']);

Route::post('employee-profiles/delete/{id}', [EmployeeProfileController::class, 'delete']);

Route::post('employee-profiles/update/{id}', [EmployeeProfileController::class, 'update']);

Route::post('/employee-profiles/update-profile/{id}', [EmployeeProfileController::class, 'updateProfile']);

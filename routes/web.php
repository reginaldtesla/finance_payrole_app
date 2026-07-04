<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

// Define get web routes
Route::get('/', function () {
    return view('login');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/userManagement', function () {
    return view('userManagement');
});
Route::get('/run_payroll', function () {
    return view('run_payroll');
});
Route::get('/reports', function () {
    return view('reports');
});
Route::get('/settings', function () {
    return view('settings');
});
Route::get('/employees', [EmployeeController::class, 'index']);
Route::get('/add_employee', [EmployeeController::class, 'create']);
Route::post('/add_employee', [EmployeeController::class, 'store']);
Route::delete('/employees/{id}', [EmployeeController::class, 'destroy']);
Route::get('/employees/{id}/edit', [EmployeeController::class, 'edit']);
Route::put('/employees/{id}', [EmployeeController::class, 'update']);



// Define post web routes
// Route::post('/dashboard', function () {
//     return view('dashboard');
// });

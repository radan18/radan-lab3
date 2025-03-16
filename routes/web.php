<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TransactionController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/get_employee', [TransactionController::class, 'getEmployee']);
Route::get('/get_employee_data', [TransactionController::class, 'getEmployeeData']);
Route::get('/get_employee_challenging', [TransactionController::class, 'getEmployeeChallenging']);
Route::get('/get_employee_difficult', [TransactionController::class, 'getEmployeeDifficult']);

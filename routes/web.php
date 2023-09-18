<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EmployeeController;

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
Route::get('dashboard', [ClientController::class, 'dashboard']); 
Route::get('login', [ClientController::class, 'index'])->name('login');
Route::post('custom-login', [ClientController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [ClientController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [ClientController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [ClientController::class, 'signOut'])->name('signout');

Route::get('employee-login', [EmployeeController::class, 'index'])->name('employee-login');
Route::post('employee-custom-login', [EmployeeController::class, 'customLogin'])->name('login.employee-custom'); 
Route::get('employee-registration', [EmployeeController::class, 'registration'])->name('register-employee');
Route::post('employee-custom-registration', [EmployeeController::class, 'customRegistration'])->name('register.employee-custom'); 
Route::get('employee-signout', [EmployeeController::class, 'signOut'])->name('signout.employee');
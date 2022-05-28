<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});

/* ---- Employee Routes ---- */
Route::get('/employee', function () {
    return view('employeeDashboard');
});

/* ---- Manager Routes ---- */
Route::get('/manager', function () {
    return view('managerDashboard');
});
//validar login
Route::post('/validate',[UserController::class, 'validate'])->name('user.validate');

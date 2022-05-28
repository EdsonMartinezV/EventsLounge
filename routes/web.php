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

Route::get('/register', function () {
    return view('register');
});

Route::get('/logout', [UserController::class, 'logout']);

Route::get('/packs', function () {
    return view('packs');
});

Route::get('/packages', function () {
    return view('packages');
});

Route::get('/bookings', function () {
    return view('bookings');
});
Route::get('/booking', function () {
    return view('bookingForm');
});
Route::get('/dashboard', function () {
    return view('dashboard');
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

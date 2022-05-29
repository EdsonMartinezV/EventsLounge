<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientController;


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
    return view('packs');
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

Route::get('/mybookings', function () {
    return view('bookings');
});
Route::get('/booking', function () {
    return view('bookingForm');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/login', function () {
    return view('login');
});

//Validar login
Route::post('/validate',[UserController::class, 'validateUser'])->name('user.validate');
//Registrar
Route::post('/register-user',[UserController::class, 'registerUser'])->name('user.register');

/* ---- Employee Routes ---- */
Route::get('/employee', function () {
    return view('employeeDashboard');
});

/* ---- Manager Routes ---- */
Route::get('/manager', function () {
    return view('managerDashboard');
});

/* ---- Rutas cliente ---- */
Route::get('/my-bookings',[ClientController::class, 'myBookings'])->name('client.bookings');

Route::delete('/delete-bookings',[ClientController::class, 'deleteBookings'])->name('delete.bookings');


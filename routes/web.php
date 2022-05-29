<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PackController;
use App\Http\Controllers\PaidController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmployeeController;


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
Route::get('/employee/showEvents', function () {
    return view('showEvents');
});
Route::get('/employee/showToPay', function () {
    return view('showToPay');
});


/* ---- Manager Routes ---- */
Route::get('/manager', function () {
    return view('managerDashboard');
});

/* ---- Users CRUD ---- */
Route::get('/manager/users', [UserController::class, 'index'])->name('manager.users');

Route::get('/manager/users/create', [UserController::class, 'create'])->name('manager.users.create');

Route::post('/manager/users/store', [UserController::class, 'store'])->name('manager.users.store');

Route::get('/manager/packs', [PackController::class, 'index'])->name('manager.packs');

Route::get('/manager/events', [EventController::class, 'index'])->name('manager.events');

Route::get('/manager/paids', [PaidController::class, 'index'])->name('manager.paids');

/* ---- Rutas cliente ---- */
Route::get('/my-bookings',[ClientController::class, 'myBookings'])->name('client.bookings');

Route::delete('/delete-bookings',[ClientController::class, 'deleteBookings'])->name('delete.bookings');

Route::get('/show-booking/{id}',[ClientController::class, 'showBooking'])->name('one.booking');

Route::put('/update-booking/{id}',[ClientController::class, 'updateBooking'])->name('update.booking');




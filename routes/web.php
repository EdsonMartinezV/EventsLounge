<?php

use App\Http\Controllers\BillController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PackController;
use App\Http\Controllers\PaidController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmployeeController;
use App\Models\Pack;

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
    $packs = Pack::all()->where('is_active', true);
    return view('packs', compact('packs'));
})->name('client.principal');

Route::get('/register', function () {
    return view('register');
});

Route::get('/logout', [UserController::class, 'logout']);

Route::get('/packs', function () {
    $packs = Pack::all()->where('is_active', true);
    return view('packs', compact('packs'));
});

Route::get('/showimages', function () {return view('showImages');});

Route::get('/mybookings', function () {
    return view('bookings');
})->name('bookings');
Route::get('/booking/{packId}', function ($packId) {
    return view('bookingForm', compact('packId'));
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
Route::get('/employee', [EmployeeController::class, 'dashboard']);

Route::get('/employee/showEvents', function () {
    return view('showEvents');
});

/* ---- Manager Routes ---- */
Route::get('/manager', [UserController::class, 'managerDashboard'])->name('manager');

Route::get('/manager/users', [UserController::class, 'index'])->name('manager.users');

Route::get('/manager/users/create', [UserController::class, 'create'])->name('manager.users.create');

Route::post('/manager/users/store', [UserController::class, 'store'])->name('manager.users.store');

Route::get('/manager/users/reset-password/{userId}', [UserController::class, 'resetPassword'])->name('manager.users.resetPassword');

Route::put('/manager/users/store-password/{userId}', [UserController::class, 'storePassword'])->name('manager.users.storePassword');

Route::get('/manager/packs', [PackController::class, 'index'])->name('manager.packs');

Route::get('/manager/packs/create', [PackController::class, 'create'])->name('manager.packs.create');

Route::post('/manager/packs/store', [PackController::class, 'store'])->name('manager.packs.store');

Route::get('/manager/events', [EventController::class, 'index'])->name('manager.events');

Route::get('/manager/events/edit/{eventId}', [EventController::class, 'edit'])->name('manager.events.edit');

Route::put('/manager/events/update/{eventId}', [EventController::class, 'update'])->name('manager.events.update');

Route::put('/manager/events/reason/{id}', [EventController::class, 'reason'])->name('manager.events.reason');

Route::get('/manager/paids', [PaidController::class, 'index'])->name('manager.paids');

Route::get('/manager/bills', [BillController::class, 'index'])->name('manager.bills');

Route::get('/manager/bills/create/{eventId}', [BillController::class, 'create'])->name('manager.bills.create');

Route::post('/manager/bills/store/{eventId}', [BillController::class, 'store'])->name('manager.bills.store');

Route::get('/manager/images/watch/{eventId}', [EventController::class, 'images'])->name('manager.events.images');

Route::get('/manager/images/show', [EventController::class, 'showUpdateImages'])->name('manager.events.images.show');

Route::get('/manager/images/update/{id}', [EventController::class, 'UpdateImages'])->name('manager.events.images.update');

Route::put('/manager/images/change/{id}',[EventController::class, 'changeImages'])->name('manager.events.images.change');

Route::delete('/manager/images/delete/{id}',[EventController::class, 'deleteImages'])->name('manager.events.images.change');

/* ---- Rutas cliente ---- */

Route::post('/new-booking/{packId}',[ClientController::class, 'newBooking'])->name('client.new.Booking');

Route::get('/my-bookings',[ClientController::class, 'myBookings'])->name('client.bookings');

Route::delete('/delete-bookings',[ClientController::class, 'deleteBookings'])->name('delete.bookings');

Route::get('/show-booking/{id}',[ClientController::class, 'showBooking'])->name('one.booking');

Route::put('/update-booking/{id}',[ClientController::class, 'updateBooking'])->name('update.booking');

Route::get('/add-image/{id}',[ClientController::class, 'addImage'])->name('client.add.image');

Route::get('/update-image/{id}',[ClientController::class, 'UpdateImage'])->name('cliente.update.image');

Route::post('/add-new-image/{id}',[ClientController::class, 'addNewImage'])->name('client.add.new.image');

Route::delete('/delete-image/{id}',[ClientController::class, 'deleteImage'])->name('client.delete.image');

Route::put('/update-image/{id}',[ClientController::class, 'changeImage'])->name('client.change.image');

//rutas empleado
Route::get('/events-realized',[EmployeeController::class, 'eventsRealized'])->name('employee.realized');

Route::post('/events-images/{id}',[EmployeeController::class, 'eventsImages'])->name('employee.Images');
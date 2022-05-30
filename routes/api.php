<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


/* ---- Rutas empleado ---- */
Route::get('/events-confirmated',[EmployeeController::class, 'eventsConfirmated'])->name('employee.events');

Route::get('/events-paids',[EmployeeController::class, 'eventsPais'])->name('employee.Paids');

Route::post('/events-images/{id}',[EmployeeController::class, 'eventsImages'])->name('employee.Images');


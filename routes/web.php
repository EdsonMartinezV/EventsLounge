<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

/* ---- Employee Routes ---- */
Route::get('/empleado', function () {
    return view('empleadoDashboard');
});

/* ---- Manager Routes ---- */
Route::get('/gerente', function () {
    return view('gerenteDashboard');
});
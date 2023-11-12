<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\ConfirmationController;
use App\Http\Controllers\FailedController;

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

Route::redirect('/', '/demo/registration');

Route::get('/demo/registration', [RegistrationController::class, 'index'])->name('registration.index');
Route::post('/demo/registration', [RegistrationController::class, 'store'])->name('registration.store');

Route::get('/demo/confirmation', [ConfirmationController::class, 'index'])->name('demo.confirmation');
Route::get('/demo/failed', [FailedController::class, 'index'])->name('demo.failed');

/*
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
*/

<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\TourController;
use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/tour/{id}', [TourController::class, 'show'])->name('tour.details');
Route::get('/tours', [SiteController::class, 'getAllTours'])->name('tours.index');
Route::get('/contacts', [SiteController::class, 'getContacts'])->name('contacts');

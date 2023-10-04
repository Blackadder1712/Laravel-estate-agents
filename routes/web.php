<?php

use App\Http\Controllers\IndexController; //access indexcontroller script
use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|*/


// turns addresses and routes into pages

Route::get('/', [IndexController::class, 'index']);//routes for class methods(method and function name )
Route::get('/hello', [IndexController::class, 'show']);

Route::resource('listing', ListingController::class); //link to listing controller script

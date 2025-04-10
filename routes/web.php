<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\AboutController;
use App\http\Controllers\ContactController;


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

//"THIS IS URL ROUTING"
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/service', function(){
//     return view('service');
// });

// Route::get('/contact', function() {
//     return view('contact');
// });
// Route::get('/about', function(){
//     return view('about');
// });

Route::get('/', [WelcomeController::class, 'home']);
Route::get('/about', [AboutController::class, 'about']);
Route::get('/service', [ServicesController::class, 'service']);
Route::get('/contact', [ContactController::class, 'contact']);
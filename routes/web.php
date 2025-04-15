<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\AboutController;
use App\http\Controllers\ContactController;
use App\http\Controllers\AdminController;

//Admin (This is backend Stuff)
use App\http\Controllers\CategoryController;
use App\http\Controllers\ClientController;
use App\http\Controllers\ProductController;
use App\http\Controllers\SalesController;
use App\http\Controllers\DashboardController;



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
// Route::get('/admin', function(){
//     return view('admin');
// });

Route::get('/', [WelcomeController::class, 'home']);
Route::get('/about', [AboutController::class, 'about']);
Route::get('/service', [ServicesController::class, 'service']);
Route::get('/contact', [ContactController::class, 'contact']);
Route::get('/admin', [AdminController::class, 'admin']);

//Admin (This is backend Stuff)
Route::get('/category', [CategoryController::class, 'category']);
Route::get('/client', [ClientController::class, 'client']);
Route::get('/product', [ProductController::class, 'product']);
Route::get('/sales', [SalesController::class, 'sales']);
Route::get('/dashboard', [DashboardController::class, 'dashboard']);

//CRUD (still backend stuff)
Route::post('/add category', [CategoryController::class,'add_category']);
Route::post('/add client', [ClientController::class,'add_client']);
Route::post('/add product',[ProductController::class,'add_product']);
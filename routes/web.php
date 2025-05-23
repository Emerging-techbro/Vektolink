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
Route::post('/add-sales', [SalesController::class,'add_sales']);

//Editing
Route::get('/edit-category-{id}', [CategoryController::class, 'edit_category']);
Route::post('/update-category-{id}',[CategoryController::class, 'update_category']);

Route::get('/edit-client-{id}',[ClientController::class, 'edit_client']);
Route::post('/update-client-{id}',[ClientController::class, 'update_client']);

Route::get('/edit-product-{id}',[ProductController::class, 'edit_product']);
Route::post('/update-product-{id}',[ProductController::class, 'update_product']);

Route::get('/edit-sales-{id}',[SalesController::class, 'edit_sales']);
Route::post('/update-sales-{id}',[SalesController::class, 'update_sales']);

//deleting
Route::get('/delete-category-{id}', [CategoryController::class,'delete_category']);

Route::get('/delete-client-{id}', [ClientController::class,'delete_client']);

Route::get('delete-sales-{id}', [SalesController::class,'delete_sales']);

Route::get('delete-product-{id}', [ProductController::class,'delete_product']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

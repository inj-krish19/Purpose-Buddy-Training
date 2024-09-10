<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\ProductController;


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

// hello and redirection

Route::get('/', [DemoController::class , 'index'] );

// api call using guzzle client demo

Route::get('/guzzle', [DemoController::class , 'guzzle'] );

// api call using curl demo

Route::get('/curl', [DemoController::class , 'curl'] );

// CRUD 

// product index route
Route::get('/product',[ProductController::class,'index'])->name('product.index');

// product create routes
Route::get('/product/create',[ProductController::class,'create'])->name('product.create');
Route::post('/product',[ProductController::class,'store'])->name('product.store');

// product show route
Route::get('/product/show',[ProductController::class,'show'])->name('product.show');

// product update routes
Route::get('/product/{product}/update',[ProductController::class,'update'])->name('product.update');
Route::post('/product/{product}/edit',[ProductController::class,'edit'])->name('product.edit');

// product delete routes
Route::get('/product/{product}/delete',[ProductController::class,'delete'])->name('product.delete');
Route::post('/product/{product}/remove',[ProductController::class,'remove'])->name('product.remove');

// PRODUCT API Routes 

// Get All Data Route
Route::get('/api/product/',[ProductController::class,'api_show'])->name('api.products');

// Get Specific Data Route
Route::get('/api/product/{prd}',[ProductController::class,'api_show_product'])->name('api.product');

// Create New Data Route
Route::post('/api/product/create',[ProductController::class,'api_create'])->name('api.create');

// Update Existing Data Route
Route::put('/api/product/update/{prd}',[ProductController::class,'api_update'])->name('api.update');

// Delete Existing Data Route
Route::delete('/api/product/delete/{prd}',[ProductController::class,'api_delete'])->name('api.delete');
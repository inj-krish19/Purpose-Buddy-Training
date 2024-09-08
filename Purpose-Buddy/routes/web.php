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

Route::get('/', [DemoController::class , 'index'] );
Route::get('/guzzle', [DemoController::class , 'guzzle'] );
Route::get('/curl', [DemoController::class , 'curl'] );

// CRUD 

Route::get('/product',[ProductController::class,'index'])->name('product.index');

Route::get('/product/create',[ProductController::class,'create'])->name('product.create');
Route::post('/product',[ProductController::class,'store'])->name('product.store');

Route::get('/product/show',[ProductController::class,'show'])->name('product.show');

Route::get('/product/{product}/update',[ProductController::class,'update'])->name('product.update');
Route::put('/product/{product}/edit',[ProductController::class,'edit'])->name('product.edit');

Route::get('/product/{product}/delete',[ProductController::class,'delete'])->name('product.delete');
Route::put('/product/{product}/remove',[ProductController::class,'remove'])->name('product.remove');
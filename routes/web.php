<?php

use Illuminate\Support\Facades\Route;
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
Route::group(['prefix' => '/api/products/'],function(){
	Route::post('/',[ProductController::class,'store'])->name('product.store');
	Route::get('/',[ProductController::class,'index'])->name('product.retrieve');
	Route::get('/{id}',[ProductController::class,'getById'])->name('product.retrieve_one');
	Route::post('update/{id}',[ProductController::class,'update'])->name('product.update');
	Route::post('delete/{id}',[ProductController::class,'delete'])->name('product.delete');
});
Route::get('/',function(){
	return view('/welcome');
});
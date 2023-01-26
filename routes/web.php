<?php

use App\Http\Controllers\GoogleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin',function(){
    return view('admin');
});




Route::get('table-product',[ProductController::class,'index']);
Route::get('product_create',[ProductController::class,'create']);
Route::post('product/add_data',[ProductController::class,'store']);
Route::get('product/detail/{id}',[ProductController::class,'show']);
Route::delete('product/destroy/{id}',[ProductController::class,'destroy']);
Route::get('/product/update/{id}',[ProductController::class,'edit']);
Route::patch('/product/update/{id}',[ProductController::class,'update']);

// seller

Route::get('table-seller',[SellerController::class,'index']);
Route::get('seller_create',[SellerController::class,'create']);
Route::post('seller/add_data',[SellerController::class,'store']);
Route::get('seller/detail/{id}',[ProductController::class,'show']);
Route::delete('seller/destroy/{id}',[SellerController::class,'destroy']);
Route::get('/seller/update/{id}',[SellerController::class,'edit']);
Route::patch('/seller/update/{id}',[SellerController::class,'update']);

Route::get('login/google',[GoogleController::class,'login']);
Route::get('/login/google/callback',[GoogleController::class,'callback']);


Route::middleware(['auth'])->group(function(){
    Route::get('logout',[GoogleController::class,'logout']);
    // Route::get('home',[UserController::class,'index']);
    
});
<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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
    return view('product');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/login');
});
Route::post('/login',[UserController::class,'userLogin']);
Route::get('/',[ProductController::class,'index']);
Route::get('/details/{id}',[ProductController::class,'details']);
Route::get('/search',[ProductController::class,'search']);
Route::post('/add_to_cart',[ProductController::class,'addToCart']);
Route::get('/cart_list',[ProductController::class,'cartList']);
Route::get('/cart_list/{id}',[ProductController::class,'removeCart']);


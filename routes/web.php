<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;

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

Route::get('/', function () {
    return view('welcome');
});

//login page
Route::get('/login',[LoginController::class, 'authenticate']);

//register page
Route::get('/register', function () {
    return view('register');
});

//home page
Route::get('/home',[HomeController::class, 'index']);
//about page
Route::get('/about', function () {
    return view('about');
});

Route::get('/products',[ProductController::class, 'index']);

Route::get('/product/{slug}',[ProductController::class, 'show']);

Route::post('/cart',[CartController::class, 'add']);
Route::get('/cart',[CartController::class, 'show']);


//categories
Route::get('/categories',[CategoryController::class, 'getAction']);



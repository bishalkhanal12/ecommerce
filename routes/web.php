<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoryController;

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
Route::get('/home', function () {
    return view('home');
});

//about page
Route::get('/about', function () {
    return view('about');
});

//categories
Route::get('/categories',[CategoryController::class, 'getAction']);
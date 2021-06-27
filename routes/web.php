<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookController;

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
    return view('welcome');
})->name('index');


Route::middleware('guest')->group(function () {
    Route::match(['post', 'get'], '/login' ,[UserController::class, 'login'])->name('login');
    Route::match(['post', 'get'], '/register', [UserController::class, 'register'])->name('register');
});

Route::middleware('auth')->group(function () {
   Route::get('/logout', [UserController::class, 'logout'])->name('logout');
});

Route::resource('books', BookController::class);


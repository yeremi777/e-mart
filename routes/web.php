<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ViewController;
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

Route::get('/', [ViewController::class, 'index'])->name('index');
Route::get('help', [ViewController::class, 'help'])->name('help');

Route::get('login', [ViewController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'login'])->name('login.post');
Route::get('register', [ViewController::class, 'register'])->name('register');
Route::post('register', [AuthController::class, 'register'])->name('register.post');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('reset-password', [ViewController::class, 'resetPassword'])->name('reset-password');
Route::post('reset-password', [AuthController::class, 'resetPassword'])->name('reset-password.post');

<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;

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



Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('welcome');
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard')->middleware('auth','admin');

// Route::get('/login_admin', [HomeController::class, 'login_admin'])->name('login_admin')->middleware('auth','admin');
// Route::post('/login_admin', [HomeController::class, 'admin_login_submit'])->name('login_admin')->middleware('auth','admin');
Route::resource('category', CategoryController::class)->middleware('auth','admin');
// Route::get('/home', [HomeController::class, 'admin'])->name('hello');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('contact-us', [HomeController::class, 'showContactForm'])->name('contact');

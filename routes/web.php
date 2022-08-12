<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VillesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('welcome');
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard')->middleware('auth','admin');

Route::resource('category', CategoryController::class)->middleware('auth','admin');
Route::resource('ville', VillesController::class)->middleware('auth','admin');
Route::resource('event', EventController::class)->middleware('auth','admin');
// Route::get('/home', [HomeController::class, 'admin'])->name('hello');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('contact-us', [HomeController::class, 'showContactForm'])->name('contact');
Route::post('contact-us', [HomeController::class, 'submitContactForm'])->name('contact');


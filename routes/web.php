<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\VillesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes(['verify'=>true]);

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('welcome')->middleware('verified');
Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
Route::post('/profile', [HomeController::class, 'updateProfile'])->name('profile');
Route::post('profile_user', [HomeController::class, 'profile_user'])->name('profile_user');
Route::get('profile_user', [HomeController::class, 'updateProfile_user'])->name('profile_user');

Route::get('admin/dashboard', [HomeController::class, 'dashboard_admin'])->name('dashboard_admin')->middleware('auth','IsAdmin');
Route::get('user/dashboard', [HomeController::class, 'dashboard_user'])->name('dashboard_user')->middleware('auth','User');
Route::get('/detailles/{id}', [HomeController::class, 'detailles'])->name('detailles');
Route::get('/admin/guests', [HomeController::class, 'guests'])->name('guests');

Route::resource('category', CategoryController::class)->middleware('auth','admin');
Route::resource('ville', VillesController::class)->middleware('auth','admin');
Route::resource('event', EventController::class)->middleware('auth','admin');
Route::resource('ticket', TicketController::class)->middleware('auth','admin');
// Route::get('/home', [HomeController::class, 'admin'])->name('hello');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('contact-us', [HomeController::class, 'showContactForm'])->name('contact');
Route::post('contact-us', [HomeController::class, 'submitContactForm'])->name('contact');
Route::post('/admin/profile/update', [HomeController::class, 'updateProfile'])->name('update-profile');


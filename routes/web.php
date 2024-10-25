<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;


Route::get('/', [EventController::class, 'index'])->name('home');

Route::resource('/events', EventController::class)->middleware('auth');

Route::put('/categories/update-name', [CategoryController::class, 'updateName'])->name('categories.updateName')->middleware('auth');
Route::put('/categories/update-color', [CategoryController::class, 'updateColor'])->name('categories.updateColor')->middleware('auth');
Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy')->middleware('auth');
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store')->middleware('auth');

Route::get('/register', [UserController::class, 'showRegistrationForm']);
Route::post('/register', [UserController::class, 'register'])->name('register');
 
Route::get('/login', [UserController::class, 'showLoginForm']);
Route::post('/login', [UserController::class, 'login'])->name('login');

Route::get('/password/change', [UserController::class, 'showChangePasswordForm'])->name('password.change.form')->middleware('auth');
Route::post('/password/change', [UserController::class, 'changePassword'])->name('password.change')->middleware('auth');

Route::post('/logout', [UserController::class, 'logout'])->name('logout');
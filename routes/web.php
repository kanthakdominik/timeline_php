<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;


Route::get('/', [EventController::class, 'index'])->name('home');

Route::resource('/events', EventController::class);

Route::put('/categories/update-name', [CategoryController::class, 'updateName'])->name('categories.updateName');
Route::put('/categories/update-color', [CategoryController::class, 'updateColor'])->name('categories.updateColor');

Route::get('/register', [UserController::class, 'showRegistrationForm']);
Route::post('/register', [UserController::class, 'register'])->name('register');
 
Route::get('/login', [UserController::class, 'showLoginForm']);
Route::post('/login', [UserController::class, 'login'])->name('login');
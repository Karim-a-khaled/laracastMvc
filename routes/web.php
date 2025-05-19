<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::get('/jobs', [JobController::class, 'index']);
Route::get('/jobs/{id}', [JobController::class, 'show']);

Route::view('/', 'home');
Route::view('/about', 'about');
Route::view('/contact', 'contact');

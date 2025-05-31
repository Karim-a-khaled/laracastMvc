<?php

use App\Http\Controllers\JobController;
use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('/about', 'about');
Route::view('/contact', 'contact');

Route::get('/jobs/create', [JobController::class, 'create']);
Route::get('/jobs', [JobController::class, 'index']);

Route::post('/jobs', function () {
    // validation...

    Job::query()->create([
        'title' => request('title'),
        'salary' => request('salary'),
        'description' => request('description'),
        'employer_id' => 1
    ]);

    return redirect('/jobs');
});

Route::get('/jobs/{id}', [JobController::class, 'show']);


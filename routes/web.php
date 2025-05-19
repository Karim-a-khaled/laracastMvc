<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    $jobs = [
        [
            'id' => 1,
            'title' => 'Frontend Engineer',
            'salary' => '$115,000',
            'description' => 'Build and maintain UI For Web Application.'
        ],
        [
            'id' => 2,
            'title' => 'UI/UX Designer',
            'salary' => '$110,000',
            'description' => 'Design intuitive user interfaces.'
        ],
        [
            'id' => 3,
            'title' => 'Backend Engineer',
            'salary' => '$125,000',
            'description' => 'Develop APIs and server-side logic.'
        ],
    ];

    return view('jobs', compact('jobs'));
});

Route::get('about', function () {
    return view('about');
});

Route::get('contact', function () {
    return view('contact');
});

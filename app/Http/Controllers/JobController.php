<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::all();
        return view('jobs', compact('jobs'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        $jobs = Job::all();
        $job = Arr::first($jobs, fn($job) => $job['id'] == $id);

        return view('job', ['job' => $job]);
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}

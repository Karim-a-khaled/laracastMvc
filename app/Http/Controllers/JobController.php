<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index(): View
    {
        $jobs = Job::with('employer')->simplePaginate(6);
        return view('jobs.index', compact('jobs'));
    }

    public function create(): View
    {
        return view('jobs.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(int $id): View
    {
        $job = Job::with(['employer'])->find($id);
        return view('jobs.show', ['job' => $job]);
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

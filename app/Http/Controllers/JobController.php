<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateJobRequest;
use App\Models\Job;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index(): View
    {
        $jobs = Job::with('employer')->latest()->simplePaginate(6);
        return view('jobs.index', compact('jobs'));
    }

    public function create(): View
    {
        return view('jobs.create');
    }

    public function store(CreateJobRequest $request): RedirectResponse
    {
        Job::query()->create([
            'title' => $request->title,
            'salary' => $request->salary,
            'description' => $request->description,
            'employer_id' => 1,
        ]);

        return redirect('/jobs');
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

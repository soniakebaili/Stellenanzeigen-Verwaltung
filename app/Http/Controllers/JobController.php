<?php

namespace App\Http\Controllers;

// app/Http/Controllers/JobController.php

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::all();
        return view('jobs.index', compact('jobs'));
    }

    public function show(Job $job)
    {
        return view('jobs.show', compact('job'));
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function store(Request $request)
    {
        $job = new Job($request->all());
        $job->save();

        return redirect()->route('jobs.show', $job->id);
    }

    public function edit(Job $job)
    {
        return view('jobs.edit', compact('job'));
    }

    public function update(Request $request, Job $job)
    {
        $job->update($request->all());

        return redirect()->route('jobs.show', $job->id);
    }

    public function destroy(Job $job)
    {
        $job->delete();

        return redirect()->route('jobs.index');
    }
}
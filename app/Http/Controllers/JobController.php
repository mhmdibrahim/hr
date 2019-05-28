<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JobController extends Controller
{
    public function show()
    {
        $jobs = Job::paginate(10);
        return view('jobs.show')->with('jobs', $jobs);
    }

    public function add()
    {
        return view('jobs.add');
    }

    public function store(Request $request)
    {
        $job = new Job();
        $job->job_id = $request->job_id;
        $job->job_title = $request->job_title;
        $job->min_salary = $request->min_salary;
        $job->max_salary = $request->max_salary;
        $job->save();
        return redirect()->route('jobs.show');
    }

    public function delete($id)
    {
        if (DB::table('employees')->where('job_id', $id)->count() > 0) {
            return redirect()->back()->withMessage('Can\'t delete job because related to some Employees');
        }
        Job::destroy($id);
        return redirect()->route('jobs.show');
    }

    public function edit($id)
    {
        $job = Job::find($id);
        return view('jobs.edit')->with('job', $job);
    }

    public function update(Request $request)
    {
        $job = Job::find($request->job_id);
        $job->job_title = $request->job_title;
        $job->min_salary = $request->min_salary;
        $job->max_salary = $request->max_salary;
        $job->save();
        return redirect()->route('jobs.show');
    }
}

@extends('base')
@section('header')
    All Jobs
    <br><br>
    <h6><a href="{{route('job.add')}}" class="btn btn-light">Add New Job</a></h6>
@endsection

@section('content')
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Job ID</th>
                <th>Job Title</th>
                <th>Min Salary</th>
                <th>Max Salary</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @forelse($jobs as $job)
            <tr>
                <td>{{$job->job_id}}</td>
                <td>{{$job->job_title}}</td>
                <td>{{$job->min_salary}}</td>
                <td>{{$job->max_salary}}</td>
                <td><a href="/job/edit/{{$job->job_id}}" class="btn btn-info">Edit</a></td>
                <td><a href="/job/delete/{{$job->job_id}}" class="btn btn-danger">Delete</a></td>
            </tr>
                @empty
                <tr>
                    <td colspan="6">No Jobs Founded!</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    {{$jobs->links()}}
@endsection

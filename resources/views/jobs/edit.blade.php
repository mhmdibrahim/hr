@extends('base')
@section('content')
    <div class="row  center-block">
        <div class="col-md-4">
            <form method="post" action="/job/edit">
                {{csrf_field()}}
                <div class="form-group">
                    <label>Job ID</label>
                    <input name="job_id"  class="form-control" value="{{$job->job_id}}">
                </div>
                <div class="form-group">
                    <label>Title</label>
                    <input name="job_title" class="form-control" value="{{$job->job_title}}">
                </div>
                <div class="form-group">
                    <label>Min salary</label>
                    <input name="min_salary" class="form-control" value="{{$job->min_salary}}">
                </div>
                <div class="form-group">
                    <label>Max salary</label>
                    <input name="max_salary" class="form-control" value="{{$job->min_salary}}">
                </div>
                <div class="form-group">
                    <input type="submit" name="update" class="btn btn-danger">
                </div>

            </form>
        </div>

    </div>

@endsection

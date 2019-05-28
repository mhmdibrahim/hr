@extends('base')
@section('content')
    <div class="row  center-block">
        <div class="col-md-4">
            <form method="post" action="/job/add">
                {{csrf_field()}}
                <div class="form-group">
                    <label>Job ID</label>
                    <input name="job_id" class="form-control">
                </div>
                <div class="form-group">
                    <label>Title</label>
                    <input name="job_title" class="form-control">
                </div>
                <div class="form-group">
                    <label>Min salary</label>
                    <input name="min_salary" class="form-control">
                </div>
                <div class="form-group">
                    <label>Max salary</label>
                    <input name="max_salary" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" name="ADD" class="btn btn-success">
                </div>

            </form>
        </div>

    </div>

@endsection

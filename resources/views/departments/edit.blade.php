@extends('base')
@section('content')
    <form method="post" action="{{route('department.update')}}">
        {{csrf_field()}}
        <div class="form-group">
            <div class="form-group">
                <label>Department ID</label>
                <input readonly name="department_id" value="{{$dept->department_id}}">
            </div>
            <div>
                <label>Department Name</label>
                <input name="department_name" value="{{$dept->department_name}}">
            </div>
            <div class="form-group">
                <label>Manager ID</label>
                <input name="manager_id"value="{{$dept->manager_id}}">
            </div>
            <div class="form-group">
                <label>Location ID</label>
                <input name="location_id" value="{{$dept->location_id}}">
            </div>
            <div class="form-group">
                <button class="btn-block">Update</button>
            </div>
        </div>
    </form>
@endsection

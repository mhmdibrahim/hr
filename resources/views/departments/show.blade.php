@extends('base')
@section('header')
    Departments
    <br><br>
    <h6><a class="btn btn-light" href="/dept/add">Add New Department</a></h6>
@endsection
<style>
    .pagination{
        justify-content: center;
    }
    .page-link{
        border-radius: 50%;
        margin: 0 12px;
        font-size: 16px;
    }
    li:first-child .page-link,li:last-child .page-link{
        border-radius: 50%!important;
        border: none;
    }

</style>
@section('content')
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Department ID</th>
                <th>Department Name</th>
                <th>Manager ID</th>
                <th>Location ID</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>

        <tbody>
        @forelse($depts as $dept)
            <tr>
                <td>{{$dept->department_id}}</td>
                <td>{{$dept->department_name}}</td>
                <td>{{$dept->manager_id}}</td>
                <td>{{$dept->location_id}}</td>
                <td><a class="btn btn-info" href="/dept/edit/{{$dept->department_id}}">Edit</a></td>
                <td><a class="btn btn-danger" href="/dept/delete/{{$dept->department_id}}">Delete</a></td>
            </tr>
            @empty
            <tr>
                <td colspan="6">No Departments Founded</td>
            </tr>
        @endforelse
        </tbody>
    </table>
    <div class="mag-content">
        {{$depts->links()}}
    </div>
@endsection

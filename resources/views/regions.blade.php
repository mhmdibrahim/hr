@extends("base")
@section('header')
<h1 class="cover-heading">Regions</h1>
@endsection
@section("content")
    <table class="table table-hover">
        <thead>
            <th>ID</th>
            <th>Name</th>
        </thead>
        <tbody>
        @forelse($regions as $region)
            <tr>
                <td>{{$region->region_id}}</td>
                <td>{{$region->region_name}}</td>
            </tr>
            @empty
            <tr>
                <td colspan="2">No Regions</td>
            </tr>
        @endforelse
        </tbody>

    </table>
@endsection
@extends("base")
@section('header')
    <h1 class="cover-heading">Countries</h1>
@endsection
@section("content")
    <table class="table table-hover">
        <thead>
        <th>Country ID</th>
        <th>Region ID</th>
        <th>Country Name</th>
        </thead>
        <tbody>
        @forelse($countries as $country)
            <tr>
                <td>{{$country->country_id}}</td>
                <td>{{$country->region_id}}</td>
                <td>{{$country->country_name}}</td>
            </tr>
        @empty
            <tr>
                <td colspan="3">No countries</td>
            </tr>
        @endforelse
        </tbody>
    </table>
    {{$countries->links()}}
@endsection
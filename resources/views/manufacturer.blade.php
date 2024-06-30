@extends('layouts.app')

@section('content')
    <h1>Manufacturers</h1>

<table class="table table-striped">
    <thead class="thead-dark">
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Address</th>
        <th scope="col">Phone</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($manufacturers as $manufacturer)
            <tr>
                <td>{{ $manufacturer->id }}</td>
                <td>{{ $manufacturer->name }}</td>
                <td>{{ $manufacturer->address }}</td>
                <td>{{ $manufacturer->phone }}</td>
            </tr>
            @endforeach
    </tbody>
</table>

@endsection
@extends('layouts.app')

@section('content')

<h1>Dashboard</h1>
<hr>

<h2>Manufacturers</h2>

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

<hr>

<h2>Cars</h2>

<table class="table table-striped">
    <thead class="thead-dark">
    <tr>
        <th scope="col">#</th>
        <th scope="col">Model</th>
        <th scope="col">Year</th>
        <th scope="col">Sales Person Email</th>
        <th scope="col">Manufacturer</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($cars as $car)
            <tr>
                <td>{{ $car->id }}</td>
                <td>{{ $car->model }}</td>
                <td>{{ $car->year }}</td>
                <td>{{ $car->salesperson_email }}</td>
                <td>{{ $car->manufacturer_id}}</td>
            </tr>
        @endforeach
    </tbody>
</table>

<hr>

@endsection
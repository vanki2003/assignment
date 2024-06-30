@extends('layouts.app')


@section('content')

<div class="d-flex justify-content-between align-items-center mb-3">
    <h1 class="mb-0">Cars</h1>

    <form action="{{ route('cars.index') }}" method="GET" class="form-inline">
        <div class="form-group mr-2 mb-0">
            <input type="text" name="search" class="form-control form-control-sm" placeholder="Search cars..." value="{{ request()->input('search') }}">
        </div>
        <button type="submit" class="btn btn-primary btn-sm">Search</button>
    </form>
</div>

<table class="table table-striped">
    <thead class="thead-dark">
    <tr>
        <th scope="col">#</th>
        <th scope="col">Model</th>
        <th scope="col">Year</th>
        <th scope="col">Sales Person Email</th>
        <th scope="col">Manufacturer</th>
        <th scope="col">Actions</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($cars as $car)
            <tr>
                <td>{{ $car->id }}</td>
                <td>{{ $car->model }}</td>
                <td>{{ $car->year }}</td>
                <td>{{ $car->salesperson_email }}</td>
                <td>{{ $car->manufacturer_id }}</td>
                <td>
                    <a href="{{ route('cars.show', $car->id) }}" class="btn btn-info btn-sm">View</a>
                    @auth
                    <a href="{{ route('cars.edit', $car->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('cars.destroy', $car->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                    @endauth
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<a href="{{ route('cars.create') }}" class="btn btn-success">Create Car</a>

@endsection

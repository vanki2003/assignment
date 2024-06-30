@extends('layouts.app')

@section('content')
<h1>Car Details</h1>
<p>Model: {{ $car->model }}</p>
<p>Year: {{ $car->year }}</p>
<p>Sales Person Email: {{ $car->salesperson_email }}</p>
<p>Manufacturer: {{ $car->manufacturer_id }}</p>
<a href="{{ route('cars.index') }}" class="btn btn-primary">Back to List</a>
<a href="{{ route('cars.edit', $car->id) }}" class="btn btn-warning">Edit</a>
@endsection

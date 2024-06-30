@extends('layouts.app')

@section('content')
<h1>Edit Car</h1>

<form action="{{ route('cars.update', $car->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="model">Model:</label>
        <input type="text" name="model" value="{{ $car->model }}" class="form-control">
    </div>
    <div class="form-group">
        <label for="year">Year:</label>
        <input type="text" name="year" value="{{ $car->year }}" class="form-control">
    </div>
    <div class="form-group">
        <label for="salesperson_email">Sales Person Email:</label>
        <input type="text" name="salesperson_email" value="{{ $car->salesperson_email }}" class="form-control">
    </div>
    <div class="form-group">
        <label for="manufacturer_id">Manufacturer:</label>
        <input type="text" name="manufacturer_id" value="{{ $car->manufacturer_id }}" class="form-control">
    </div>
    <button type="submit" class="btn btn-success">Update</button>
</form>
@endsection

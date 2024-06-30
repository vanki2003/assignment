@extends('layouts.app')

@section('content')
<h1>Create Car</h1>

<form action="{{ route('cars.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="model">Model:</label>
        <input type="text" name="model" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="year">Year:</label>
        <input type="number" name="year" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="salesperson_email">Sales Person Email:</label>
        <input type="email" name="salesperson_email" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="manufacturer_id">Manufacturer:</label>
        <select name="manufacturer_id" class="form-control" required>
            <option value="">Select Manufacturer</option>
            @foreach($manufacturers as $manufacturer)
                <option value="{{ $manufacturer->id }}">{{ $manufacturer->name }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-success">Create</button>
</form>
@endsection
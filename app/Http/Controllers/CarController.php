<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Manufacturer;
use Illuminate\Support\Facades\Auth;

class CarController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        if ($search) {
            $cars = Car::where('model', 'LIKE', "%{$search}%")
                        ->orWhere('year', 'LIKE', "%{$search}%")
                        ->orWhere('salesperson_email', 'LIKE', "%{$search}%")
                        ->orWhere('manufacturer_id', 'LIKE', "%{$search}%")
                        ->get();
        } else {
            $cars = Car::all();
        }

        return view('cars.index', compact('cars'));
    }

    public function show($id)
    {
        $car = Car::findOrFail($id);
        return view('cars.show', compact('car'));
    }

    public function edit($id)
    {
        $user = Auth::user();
        $car = Car::findOrFail($id);
        return view('cars.edit', compact('car'));
    }

    public function update(Request $request, $id)
    {
        $user = Auth::user();
        $car = Car::findOrFail($id);
        $car->update($request->all());
        return redirect()->route('cars.index')->with('success', 'Car updated successfully');
    }

    public function destroy($id)
    {
        $user = Auth::user();
        $car = Car::findOrFail($id);
        $car->delete();
        return redirect()->route('cars.index')->with('success', 'Car deleted successfully');
    }

    public function create()
    {
        $user = Auth::user();
        $manufacturers = Manufacturer::all();
    return view('cars.create', compact('manufacturers'));
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        $request->validate([
            'model' => 'required|string|max:255',
            'year' => 'required|integer',
            'salesperson_email' => 'required|email',
            'manufacturer_id' => 'required|integer'
        ]);

        Car::create($request->all());
        return redirect()->route('cars.index')->with('success', 'Car created successfully');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manufacturer;
use App\Models\Car;

class ManufacturerController extends Controller
{
    function show()
    {
        $manufacturers = Manufacturer::all();
        return view('manufacturer', ['manufacturers' => $manufacturers]);
    }

    public function welcome()
    {
        $manufacturers = Manufacturer::all();
        $cars = Car::all();
        return view('welcome', [
            'manufacturers' => $manufacturers,
            'cars' => $cars
        ]);
    }
}

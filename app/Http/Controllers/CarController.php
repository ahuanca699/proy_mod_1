<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\CarRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $cars = Car::paginate();

        return view('car.index', compact('cars'))
            ->with('i', ($request->input('page', 1) - 1) * $cars->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $car = new Car();

        return view('car.create', compact('car'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CarRequest $request): RedirectResponse
    {
        Car::create($request->validated());

        return Redirect::route('cars.index')
            ->with('success', 'Car created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $car = Car::find($id);

        return view('car.show', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $car = Car::find($id);

        return view('car.edit', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CarRequest $request, Car $car): RedirectResponse
    {
        $car->update($request->validated());

        return Redirect::route('cars.index')
            ->with('success', 'Car updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Car::find($id)->delete();

        return Redirect::route('cars.index')
            ->with('success', 'Car deleted successfully');
    }
}

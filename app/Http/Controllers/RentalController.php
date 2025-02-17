<?php

namespace App\Http\Controllers;

use App\Models\Rental;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\RentalRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class RentalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $rentals = Rental::paginate();

        return view('rental.index', compact('rentals'))
            ->with('i', ($request->input('page', 1) - 1) * $rentals->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $rental = new Rental();

        return view('rental.create', compact('rental'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RentalRequest $request): RedirectResponse
    {
        Rental::create($request->validated());

        return Redirect::route('rentals.index')
            ->with('success', 'Rental created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $rental = Rental::find($id);

        return view('rental.show', compact('rental'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $rental = Rental::find($id);

        return view('rental.edit', compact('rental'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RentalRequest $request, Rental $rental): RedirectResponse
    {
        $rental->update($request->validated());

        return Redirect::route('rentals.index')
            ->with('success', 'Rental updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Rental::find($id)->delete();

        return Redirect::route('rentals.index')
            ->with('success', 'Rental deleted successfully');
    }
}

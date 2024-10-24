<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;

class PetController extends Controller
{
    public function index()
    {
        $pets = Pet::all();
        return view('pets.index', compact('pets'));
    }

    public function create()
    {
        return view('pets.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'species' => 'required|max:255',
            'breed' => 'nullable|max:255',
            'date_of_birth' => 'required|date',
        ]);

        Pet::create($validatedData);

        return redirect()->route('pets.index')->with('success', 'Pet created successfully.');
    }

    public function edit(Pet $pet)
    {
        return view('pets.edit', compact('pet'));
    }

    public function update(Request $request, Pet $pet)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'species' => 'required|max:255',
            'breed' => 'nullable|max:255',
            'date_of_birth' => 'required|date',
        ]);

        $pet->update($validatedData);

        return redirect()->route('pets.index')->with('success', 'Pet updated successfully.');
    }

    public function destroy(Pet $pet)
    {
        $pet->delete();

        return redirect()->route('pets.index')->with('success', 'Pet deleted successfully.');
    }
}

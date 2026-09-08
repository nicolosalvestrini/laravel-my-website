<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperiencesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $experiences = Experience::all();
        return view('admin.experiences.index', compact('experiences'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.experiences.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'type' => 'required|in:formazione,esperienza',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'period_start' => 'required|date',
            'period_end' => 'nullable|date|after_or_equal:period_start',
        ]);

        Experience::create($data);

        return redirect()->route('admin.experiences.index')
            ->with('success', 'Esperienza creata con successo.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Experience $experience)
    {
        return view('admin.experiences.show', compact('experience'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Experience $experience)
    {
        return view('admin.experiences.edit', compact('experience'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Experience $experience)
    {
        $data = $request->validate([
            'type' => 'required|in:formazione,esperienza',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'period_start' => 'required|date',
            'period_end' => 'nullable|date|after_or_equal:period_start',
        ]);

        $experience->update($data);

        return redirect()->route('admin.experiences.index')
            ->with('success', 'Esperienza aggiornata con successo.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Experience $experience)
    {
        $experience->delete();

        return redirect()->route('admin.experiences.index')
            ->with('success', 'Esperienza eliminata con successo.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Technology;
use Illuminate\Http\Request;

class TechnologiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $technologies = Technology::all();
        return view('admin.technologies.index', compact('technologies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.technologies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:100|unique:technologies,name',
            'icon' => 'nullable|string|max:255',
            'type' => 'required|in:frontend,backend,database,devops,other',
            'show_in_skills' => 'required|boolean',
            'sort_order' => 'nullable|integer',
        ]);

        $data['show_in_skills'] = $data['show_in_skills'] ?? false;
        $data['sort_order'] = $data['sort_order'] ?? 0;

        Technology::create($data);

        return redirect()->route('admin.technologies.index')
            ->with('success', 'Tecnologia creata con successo.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Technology $technology)
    {
        return view('admin.technologies.show', compact('technology'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Technology $technology)
    {
        return view('admin.technologies.edit', compact('technology'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Technology $technology)
    {
        $data = $request->validate([
            'name' => 'required|string|max:100|unique:technologies,name,' . $technology->id,
            'icon' => 'nullable|string|max:255',
            'type' => 'required|in:frontend,backend,database,devops,other',
            'show_in_skills' => 'required|boolean',
            'sort_order' => 'nullable|integer',
        ]);

        $data['show_in_skills'] = $data['show_in_skills'] ?? false;
        $data['sort_order'] = $data['sort_order'] ?? $technology->sort_order;

        $technology->update($data);

        return redirect()->route('admin.technologies.index')
            ->with('success', 'Tecnologia aggiornata con successo.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Technology $technology)
    {
        $technology->delete();

        return redirect()->route('admin.technologies.index')
            ->with('success', 'Tecnologia eliminata con successo.');
    }
}

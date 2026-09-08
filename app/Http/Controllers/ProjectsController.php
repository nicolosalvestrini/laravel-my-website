<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\Technology;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $technologies = Technology::orderBy('name')->get();

        return view('admin.projects.create', compact('technologies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:projects,slug',
            'description' => 'required|string',
            'category' => 'required|in:frontend,backend,fullstack,database',
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'github_url' => 'nullable|url|max:255',
            'is_featured' => 'nullable|boolean',
            'sort_order' => 'nullable|integer',
            'demo_url' => 'nullable|url|max:255',
            'technologies' => 'sometimes|array',
            'technologies.*' => 'required|integer|distinct|exists:technologies,id',

        ]);

        if ($request->hasFile('image_path')) {
            $data['image_path'] = $request->file('image_path')
                ->store('projects', 'public');
        }

        $technologyIds = $data['technologies'] ?? [];
        unset($data['technologies']);

        $data['is_featured'] = $data['is_featured'] ?? false;
        $data['sort_order'] = $data['sort_order'] ?? 0;

        $project = Project::create($data);
        $project->technologies()->sync($technologyIds);

        return redirect()->route('admin.projects.index')
            ->with('success', 'Progetto creato con successo.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $technologies = Technology::orderBy('name')->get();

        return view('admin.projects.edit', compact('project', 'technologies'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:projects,slug,' . $project->id,
            'description' => 'required|string',
            'category' => 'required|in:frontend,backend,fullstack,database',
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'github_url' => 'nullable|url|max:255',
            'is_featured' => 'nullable|boolean',
            'sort_order' => 'nullable|integer',
            'demo_url' => 'nullable|url|max:255',
            'technologies' => 'sometimes|array',
            'technologies.*' => 'required|integer|distinct|exists:technologies,id',
        ]);

        $oldImagePath = $project->image_path;

        if ($request->hasFile('image_path')) {
            $data['image_path'] = $request->file('image_path')
                ->store('projects', 'public');
        } else {
            unset($data['image_path']);
        }

        $technologyIds = $data['technologies'] ?? [];
        unset($data['technologies']);

        $data['is_featured'] = $data['is_featured'] ?? false;
        $data['sort_order'] = $data['sort_order'] ?? 0;

        $project->update($data);
        $project->technologies()->sync($technologyIds);

        if ($request->hasFile('image_path') && $oldImagePath) {
            Storage::disk('public')->delete($oldImagePath);
        }

        return redirect()->route('admin.projects.index')
            ->with('success', 'Progetto aggiornato con successo.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $imagePath = $project->image_path;

        $project->delete();

        if ($imagePath) {
            Storage::disk('public')->delete($imagePath);
        }

        return redirect()->route('admin.projects.index')
            ->with('success', 'Progetto eliminato con successo.');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('admin.testimonials.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'author_name' => 'required|string|max:255',
            'author_role' => 'nullable|string|max:255',
            'avatar_path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'message' => 'required|string',
            'rating' => 'nullable|integer|min:1|max:5',
            'is_published' => 'required|boolean',
        ]);

        if ($request->hasFile('avatar_path')) {
            $data['avatar_path'] = $request->file('avatar_path')
                ->store('testimonials', 'public');
        }

        Testimonial::create($data);

        return redirect()->route('admin.testimonials.index')
            ->with('success', 'Testimonianza creata con successo.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial)
    {
        return view('admin.testimonials.show', compact('testimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $data = $request->validate([
            'author_name' => 'required|string|max:255',
            'author_role' => 'nullable|string|max:255',
            'avatar_path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'message' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            'is_published' => 'required|boolean',
        ]);

        $oldAvatarPath = $testimonial->avatar_path;

        if ($request->hasFile('avatar_path')) {
            $data['avatar_path'] = $request->file('avatar_path')
                ->store('testimonials', 'public');
        } else {
            unset($data['avatar_path']);
        }

        $testimonial->update($data);

        if ($request->hasFile('avatar_path') && $oldAvatarPath) {
            Storage::disk('public')->delete($oldAvatarPath);
        }

        return redirect()->route('admin.testimonials.index')
            ->with('success', 'Testimonianza aggiornata con successo.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        $avatarPath = $testimonial->avatar_path;

        $testimonial->delete();

        if ($avatarPath) {
            Storage::disk('public')->delete($avatarPath);
        }

        return redirect()->route('admin.testimonials.index')
            ->with('success', 'Testimonianza eliminata con successo.');
    }
}

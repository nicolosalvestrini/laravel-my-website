<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use App\Models\Project;
use App\Models\Service;
use App\Models\SiteSetting;
use App\Models\Technology;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function projects(Request $request)
    {
        $query = Project::with('technologies')->orderBy('sort_order');

        if ($request->filled('category')) {
            $query->where('category', $request->string('category'));
        }

        if ($request->boolean('featured')) {
            $query->where('is_featured', true);
        }

        return $query->get()->map(fn (Project $project) => [
            'id' => $project->id,
            'title' => $project->title,
            'slug' => $project->slug,
            'description' => $project->description,
            'category' => $project->category,
            'image_url' => $project->image_url,
            'demo_url' => $project->demo_url,
            'github_url' => $project->github_url,
            'is_featured' => $project->is_featured,
            'technologies' => $project->technologies->map(fn (Technology $technology) => [
                'id' => $technology->id,
                'name' => $technology->name,
                'icon' => $technology->icon,
            ]),
        ]);
    }

    public function project(string $slug)
    {
        $project = Project::with(['technologies', 'images'])->where('slug', $slug)->firstOrFail();

        return [
            'id' => $project->id,
            'title' => $project->title,
            'slug' => $project->slug,
            'description' => $project->description,
            'details' => $project->details,
            'features' => collect(preg_split('/\R/',(string) $project->features))
                ->map(fn ($line) => trim($line))
                ->filter()
                ->values(),
            'category' => $project->category,
            'image_url' => $project->image_url,
            'demo_url' => $project->demo_url,
            'github_url' => $project->github_url,
            'technologies' => $project->technologies->map(fn (Technology $technology) => [
                'id' => $technology->id,
                'name' => $technology->name,
                'icon' => $technology->icon,
            ]),
            'images' => $project->images->map(fn ($image) => [
                'id' => $image->id,
                'image_url' => $image->image_url,
                'caption' => $image->caption,
            ]),
        ];
    }

    public function services()
    {
        return Service::orderBy('sort_order')->get(['id', 'title', 'description', 'icon', 'sort_order']);
    }

    public function technologies(Request $request)
    {
        $query = Technology::orderBy('sort_order');

        if ($request->boolean('skills')) {
            $query->where('show_in_skills', true);
        }

        return $query->get(['id', 'name', 'icon', 'type', 'show_in_skills', 'sort_order']);
    }

    public function experiences()
    {
        return Experience::orderBy('sort_order')->get([
            'id', 'type', 'title', 'description', 'period_start', 'period_end', 'sort_order',
        ]);
    }

    public function testimonials()
    {
        return Testimonial::where('is_published', true)
            ->latest()
            ->get(['id', 'author_name', 'author_role', 'avatar_path', 'message', 'rating'])
            ->map(fn (Testimonial $testimonial) => [
                'id' => $testimonial->id,
                'author_name' => $testimonial->author_name,
                'author_role' => $testimonial->author_role,
                'avatar_url' => $testimonial->avatar_url,
                'message' => $testimonial->message,
                'rating' => $testimonial->rating,
            ]);
    }

    public function storeTestimonial(Request $request)
    {
        $data = $request->validate([
            'author_name' => 'required|string|max:100',
            'author_role' => 'nullable|string|max:150',
            'message' => 'required|string|min:20|max:1000',
            'rating' => 'nullable|integer|min:1|max:5',
            'website' => 'nullable|string',
        ]);

        // Campo trappola per i bot: gli utenti reali non lo compilano.
        if (! empty($data['website'])) {
            return response()->json(['message' => 'Grazie! La tua testimonianza è stata inviata.'], 201);
        }
        unset($data['website']);

        Testimonial::create($data + ['is_published' => false]);

        return response()->json([
            'message' => 'Grazie! La tua testimonianza è stata inviata e sarà pubblicata dopo la verifica.',
        ], 201);
    }

    public function siteSettings()
    {
        return SiteSetting::all(['key', 'value'])->pluck('value', 'key');
    }
}

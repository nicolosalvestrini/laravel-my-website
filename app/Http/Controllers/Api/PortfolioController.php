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

    public function siteSettings()
    {
        return SiteSetting::all(['key', 'value'])->pluck('value', 'key');
    }
}

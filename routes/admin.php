<?php

use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TechnologiesController;
use App\Http\Controllers\ExperiencesController;
use App\Http\Controllers\TestimonialsController;
use App\Http\Controllers\ContactMessagesController;
use App\Http\Controllers\SiteSettingsController;
use App\Models\ContactMessage;
use App\Models\Experience;
use App\Models\Project;
use App\Models\Service;
use App\Models\Technology;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->middleware(['auth', 'admin'])->group(function () {

    Route::get('/', function () {
        return view('admin.dashboard', [
            'projectsCount' => Project::count(),
            'servicesCount' => Service::count(),
            'technologiesCount' => Technology::count(),
            'unreadMessagesCount' => ContactMessage::unread()->count(),
            'featuredProjects' => Project::with('technologies')->where('is_featured', true)->orderBy('sort_order')->take(3)->get(),
            'latestMessages' => ContactMessage::latest()->take(3)->get(),
            'latestExperience' => Experience::orderBy('sort_order')->first(),
        ]);
    })->name('dashboard');

    Route::resource('projects', ProjectsController::class);
    Route::resource('services', ServicesController::class);
    Route::resource('technologies', TechnologiesController::class);
    Route::resource('experiences', ExperiencesController::class);
    Route::resource('testimonials', TestimonialsController::class);

    Route::resource('contact-messages', ContactMessagesController::class)
        ->parameters(['contact-messages' => 'contactMessage'])
        ->only(['index', 'show', 'destroy']);

    Route::resource('site-settings', SiteSettingsController::class)
        ->parameters(['site-settings' => 'siteSetting']);
});

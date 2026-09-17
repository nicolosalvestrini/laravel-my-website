<?php

use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TechnologiesController;
use App\Http\Controllers\ExperiencesController;
use App\Http\Controllers\TestimonialsController;
use App\Http\Controllers\ContactMessagesController;
use App\Http\Controllers\SiteSettingsController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {

    Route::resource('projects', ProjectsController::class);
    Route::resource('services', ServicesController::class);
    Route::resource('technologies', TechnologiesController::class);
    Route::resource('experiences', ExperiencesController::class);
    Route::resource('testimonials', TestimonialsController::class);

    Route::resource('contact-messages', ContactMessagesController::class)
        ->parameters(['contact-messages' => 'contactMessage'])
        ->except(['store']);

    Route::resource('site-settings', SiteSettingsController::class)
        ->parameters(['site-settings' => 'siteSetting']);
});

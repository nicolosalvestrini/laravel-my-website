<?php

use App\Http\Controllers\Api\PortfolioController;
use Illuminate\Support\Facades\Route;

Route::get('/projects', [PortfolioController::class, 'projects']);
Route::get('/projects/{slug}', [PortfolioController::class, 'project']);
Route::get('/services', [PortfolioController::class, 'services']);
Route::get('/technologies', [PortfolioController::class, 'technologies']);
Route::get('/experiences', [PortfolioController::class, 'experiences']);
Route::get('/testimonials', [PortfolioController::class, 'testimonials']);
Route::post('/testimonials', [PortfolioController::class, 'storeTestimonial'])->middleware('throttle:3,10');
Route::get('/site-settings', [PortfolioController::class, 'siteSettings']);

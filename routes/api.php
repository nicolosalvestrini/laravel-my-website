<?php

use App\Http\Controllers\Api\PortfolioController;
use Illuminate\Support\Facades\Route;

Route::get('/projects', [PortfolioController::class, 'projects']);
Route::get('/services', [PortfolioController::class, 'services']);
Route::get('/technologies', [PortfolioController::class, 'technologies']);
Route::get('/experiences', [PortfolioController::class, 'experiences']);
Route::get('/testimonials', [PortfolioController::class, 'testimonials']);
Route::get('/site-settings', [PortfolioController::class, 'siteSettings']);

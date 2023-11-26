<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;



Route::get('/', [PortfolioController::class, 'index'])->name('index');
Route::get('/home', [PortfolioController::class, 'index'])->name('home');
Route::get('/about', [PortfolioController::class, 'about'])->name('about');
Route::get('/skills', [PortfolioController::class, 'skill'])->name('skills');
Route::get('/services', [PortfolioController::class, 'service'])->name('services');
Route::get('/projects', [PortfolioController::class, 'project'])->name('projects');
Route::get('/contact', [PortfolioController::class, 'contact'])->name('contact');

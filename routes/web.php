<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticContentController;

Route::get('/', [StaticContentController::class, 'home'])->name('home');
Route::get('profile', [StaticContentController::class, 'profile'])->name('profile');
Route::get('dashboard', [StaticContentController::class, 'dashboard'])->name('dashboard');
Route::get('faq', [StaticContentController::class, 'faq'])->name('faq');
Route::get('blogs', [\App\Http\Controllers\BlogController::class, 'blogs'])->name('blogs');
Route::get('blog/{slug}', [\App\Http\Controllers\BlogController::class, 'show'])->name('blog.show');

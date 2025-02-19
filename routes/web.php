<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\FaqController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticContentController;

Route::get('/', [StaticContentController::class, 'home'])->name('home');
Route::get('profile', [StaticContentController::class, 'profile'])->name('profile');
Route::get('dashboard', [StaticContentController::class, 'dashboard'])->name('dashboard');

/**
 * Routes about faq
 */
Route::get('faq', [FaqController::class, 'index'])->name('faq');
Route::get('faq/create', [FaqController::class, 'create'])->name('faq.create');
Route::post('faq', [FaqController::class, 'store'])->name('faq.store');
Route::delete('faq/{faq}', [FaqController::class, 'delete'])->name('faq.delete');
Route::get('faq/{faq}/edit', [FaqController::class, 'edit'])->name('faq.edit');
Route::put('faq/{faq}', [FaqController::class, 'update'])->name('faq.update');

/**
 * Routes about blogs
 */
Route::get('blogs', [BlogController::class, 'index'])->name('blogs');
Route::get('blogs/create', [BlogController::class, 'create'])->name('blogs.create');
Route::post('blogs', [BlogController::class, 'store'])->name('blogs.store');
Route::delete('blogs/{blog}', [BlogController::class, 'delete'])->name('blogs.delete');
Route::get('blogs/{blog}/edit', [BlogController::class, 'edit'])->name('blogs.edit');
Route::get('blogs/{blog}', [BlogController::class, 'show'])->name('blogs.show');
Route::put('blogs/{blog}', [BlogController::class, 'update'])->name('blogs.update');

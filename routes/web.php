<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\FinishController;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PresentationController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoadMapController;
use App\Http\Controllers\TeamMemberController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BlogController::class, 'homepage'])->name('home');
Route::get('/presentation', [PresentationController::class, 'index'])->name('presentation');
Route::get('/finishes/{finish:slug}', [FinishController::class, 'show'])->name('finishes.show');
Route::get('/sample-request', [InquiryController::class, 'sample'])->name('sample.create');
Route::post('/inquiries', [InquiryController::class, 'store'])->name('inquiries.store');

Route::get('/roadmap', [RoadMapController::class, 'index'])->name('roadmap');
Route::get('/about', [TeamMemberController::class, 'showAboutPage'])->name('about');
Route::get('/team', [TeamMemberController::class, 'showTeamMembers'])->name('team.index');
Route::get('/team-member/{id}', [TeamMemberController::class, 'show'])->name('team.show');

Route::get('/projects', [BlogController::class, 'showProjects'])->name('projects');
Route::get('/projects/filter/{category}', [BlogController::class, 'filterProjects'])->name('projects.filter');
Route::get('/blogs/{slug}', [BlogController::class, 'show'])->name('blogs.show');

Route::get('/news', [NewsController::class, 'frontendIndex'])->name('news.index');
Route::get('/news/category/{category}', [NewsController::class, 'showByCategory'])->name('news.category');
Route::get('/news/{slug}', [NewsController::class, 'show'])->name('news.show');

Route::get('/shop', [ProductController::class, 'shop'])->name('shop');
Route::get('/shop/{slug}', [ProductController::class, 'show'])->name('shop.details');

Route::get('/{slug}', [PageController::class, 'show'])->name('pages.show');

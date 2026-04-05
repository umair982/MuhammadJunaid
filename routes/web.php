<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\EducationController;
use App\Http\Controllers\Admin\ExperienceController;
use App\Http\Controllers\Admin\PortfolioCategoryController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SkillCategoryController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\Admin\SocialLinkController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeFrontController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;


    Route::get('/', [HomeFrontController::class, 'index'])->name('home');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('fronthome');
Route::prefix('admin')->middleware('auth')->name('admin.')->group(function () {

    // Profile
    Route::get('/dashboard', [ProfileController::class, 'index'])->name('dashboard');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

    // Skill Categories
    Route::resource('skill-categories', SkillCategoryController::class)->except(['show', 'edit']);

    // Skills
    Route::resource('skills', SkillController::class)->except(['show', 'edit']);



    // Education
    Route::resource('educations', EducationController::class)->except(['show', 'create', 'edit']);

    // Experience
    Route::resource('experiences', ExperienceController::class)->except(['show', 'create', 'edit']);

    // Socials
    Route::resource('socials', SocialLinkController::class)->except(['show', 'create', 'edit']);

    Route::get('/about', [AboutController::class, 'adminIndex'])->name('about.index');

    // About Section (single)
    Route::post('/about-section/{aboutSection}', [AboutController::class, 'updateSection'])
        ->name('about-section.update');

    // Counters
    Route::post('/about-counter', [AboutController::class, 'storeCounter'])
        ->name('about-counter.store');

    Route::put('/about-counter/{counter}', [AboutController::class, 'updateCounter'])
        ->name('about-counter.update');

    Route::delete('/about-counter/{counter}', [AboutController::class, 'destroyCounter'])
        ->name('about-counter.destroy');


    Route::post('/portfolio-categories', [PortfolioCategoryController::class, 'store'])
        ->name('portfolio-categories.store');

    Route::delete('/portfolio-categories/{id}', [PortfolioCategoryController::class, 'destroy'])
        ->name('portfolio-categories.destroy');


    // Portfolios
    Route::post('/portfolios', [PortfolioController::class, 'store'])
        ->name('portfolios.store');

    Route::put('/portfolios/{id}', [PortfolioController::class, 'update'])
        ->name('portfolios.update');

    Route::delete('/portfolios/{id}', [PortfolioController::class, 'destroy'])
        ->name('portfolios.destroy');
});



Route::get('/run-fresh-migrations', function () {

    Artisan::call('migrate:fresh', [
        '--force' => true,
    ]);


    Artisan::call('db:seed', [
        '--force' => true,
    ]);



    return "Migrations refreshed and seeded successfully!";
});


Route::get('/run-migrations', function () {

    Artisan::call('migrate', [
        '--force' => true,
    ]);



    return "Migrations run  successfully!";
});

Route::get('/run-seeder', function () {



    Artisan::call('db:seed', [
        '--force' => true,
    ]);

    return "seeders and seeded successfully!";
});




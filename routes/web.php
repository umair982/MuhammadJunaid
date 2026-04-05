<?php

use App\Http\Controllers\Admin\EducationController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\Admin\SocialLinkController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeFrontController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;


    Route::get('/', [HomeFrontController::class, 'index'])->name('home');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('fronthome');
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {

    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::resource('skills', SkillController::class);
    Route::resource('educations', EducationController::class);
    Route::resource('socials', SocialLinkController::class);
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




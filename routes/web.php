<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProjectController;


// Home
Route::get('/', [HomeController::class, '__invoke'])->name('home');


Route::get('/team', function () {
    return view('team');
})->name('team');

Route::get('/why-profout', function () {
    return view('why-profout');
})->name('why-profout');

Route::get('/certifications', [PageController::class, 'certifications'])->name('certifications');

Route::get('/partners', function () {
    return view('partners');
})->name('partners');

Route::get('/clients', [ClientController::class, '__invoke'])->name('clients');


// About Company Routes
Route::controller(PageController::class)->group(function () {
    Route::get('/about-us', 'about')->name('about');
    Route::get('/contact-us', 'contact')->name('contact');
    Route::get('/careers', 'careers')->name('careers');
});

// Services Routes
Route::prefix('services')->group(function () {
    Route::get('/', function () {
        return view('services.index');
    })->name('services.index');

    Route::get('/network-and-communication', function () {
        return view('services.communication');
    })->name('services.network-and-communication');

    Route::get('/power-and-energy', function () {
        return view('services.energy');
    })->name('services.power-and-energy');

    Route::get('/security-solutions', function () {
        return view('services.security');
    })->name('services.security-solutions');

    Route::get('/construction', function () {
        return view('services.construction');
    })->name('services.construction');
});

// Project Routes
Route::controller(ProjectController::class)->group(function () {
    Route::get('/projects', 'index')->name('projects');
    Route::get('/projects/{project}', 'show')->name('projects.show');
});

// Legal Routes
Route::view('/terms-of-service', 'legal.terms')->name('legal.terms');
Route::view('/privacy-policy', 'legal.privacy')->name('legal.privacy');

// Download Company Profile Link
Route::get('resources/downloads/company-profile', function(){
    $path =  public_path(). "/mediadownload/profile.pdf";
    return response()->download($path, date('Y') . ' - Professional Outcomes Limited Company Profile ' . '.pdf', ['Content-Type' => 'application/pdf',]);
})->name('download-company-profile');


// Blog Links
Route::controller(PostController::class)->group(function () {
    Route::get('/blog', 'index')->name('blog.index');
    Route::get('/blog/{post}', 'show')->name('blog.show');
});

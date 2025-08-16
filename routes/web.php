<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProjectController;


Route::get('/', [HomeController::class])->name('home');


Route::get('/team', function () {
    return view('team');
})->name('team');

Route::get('/why-profout', function () {
    return view('why-profout');
})->name('why-profout');

Route::get('/certifications', function () {
    return view('certifications');
})->name('certifications');

Route::get('/partners', function () {
    return view('partners');
})->name('partners');

Route::get('/clients', function () {
    return view('clients');
})->name('clients');


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
    })->name('services');

    Route::get('/communication', function () {
        return view('services.communication');
    })->name('services.communication');

    Route::get('/energy', function () {
        return view('services.energy');
    })->name('services.energy');

    Route::get('/security', function () {
        return view('services.security');
    })->name('services.security');
});

// Project Routes
Route::controller(ProjectController::class)->group(function () {
    Route::get('/projects', 'index')->name('projects');
    Route::get('/projects/{project}', 'show')->name('projects.show');
});

// Legal Routes
Route::prefix('legal')->group(function () {
    Route::get('/terms-and-conditions', function () {
        return view('legal.terms');
    })->name('legal.terms');

    Route::get('/privacy-policy', function () {
        return view('legal.privacy');
    })->name('legal.privacy');
});

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

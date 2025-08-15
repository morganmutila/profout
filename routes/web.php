<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/about', function () {
    return view('home');
})->name('about');

Route::get('/services', function () {
    return view('home');
})->name('services');

Route::get('/projects', function () {
    return view('home');
})->name('projects');

Route::get('/blog', function () {
    return view('home');
})->name('blog');

Route::get('/blog/{post}', function ($post) {
    return view('home');
})->name('blog.show');
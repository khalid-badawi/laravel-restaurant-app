<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('home');
});


Route::get('/home', function () {
    return view('pages.home');
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/menu', function () {
    return view('pages.menu');
})->name('menu');

Route::get('/pages', function () {
    return view('pages.pages');
})->name('pages');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

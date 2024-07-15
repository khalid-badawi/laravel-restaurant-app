<?php

use \App\Models\Articles;
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
    $articles = Articles::paginate(12);
    return view('pages.pages', ['articles' => $articles]);
})->name('pages');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

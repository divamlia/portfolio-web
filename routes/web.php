<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('home'))->name('home');
Route::get('/about', fn() => view('about'))->name('about');
Route::get('/experience', fn() => view('experience'))->name('experience');
Route::get('/education', fn() => view('education'))->name('education');
Route::get('/event', fn() => view('event'))->name('event');
Route::get('/organization', fn() => view('organization'))->name('organization');
Route::get('/achievements', fn() => view('achievements'))->name('achievements');
Route::get('/skills', fn() => view('skills'))->name('skills');
Route::get('/portfolio', fn() => view('portfolio'))->name('portfolio');
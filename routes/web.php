<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
});

Route::get('/about', [AboutController::class, 'About'])->name('about');
Route::get('/services', [ServicesController::class, 'Services'])->name('service');
Route::get('/gallery', [GalleryController::class, 'Gallery'])->name('gallery');
Route::get('/contact', [ContactController::class, 'Contact'])->name('contact');
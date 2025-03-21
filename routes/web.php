<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DishController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
});
Route::get('/', [HomeController::class, 'HomePage']);

Route::get('/about', [AboutController::class, 'About'])->name('about');
Route::get('/services', [ServicesController::class, 'Services'])->name('service');
Route::get('/gallery', [GalleryController::class, 'Gallery'])->name('gallery');
Route::get('/contact', [ContactController::class, 'Contact'])->name('contact');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.home');
    })->name('dashboard');
    Route::get('/add-dishes', [DishController::class, 'AddDish'])->name('dish');
    Route::get('/all-dishes', [DishController::class, 'AllDish'])->name('alldish');
    Route::post('/store-dish', [DishController::class, 'StoreDish'])->name('StoreDish');
    Route::get('/delete-dish/{id}', [DishController::class, 'DeleteDish'])->name('DeleteDish');
    Route::get('/edit-disher/{id}', [DishController::class, 'EditDish'])->name('edit-dish');
    Route::post('/update-dish/{id}', [DishController::class, 'UpdateDish'])->name('UpdateDish');
    Route::get('/banner', [BannerController::class, 'banner'])->name('banner');
    Route::post('/update-banner/{id}', [BannerController::class, 'UpdateBanner'])->name('updatebanner');
    Route::get('/review', [ReviewController::class, 'Review'])->name('review');
    Route::post('/store-review', [ReviewController::class, 'StoreReview'])->name('storeReview');
    Route::get('/delete-review/{id}', [ReviewController::class, 'ReviewDelete'])->name('deleteReview');
});
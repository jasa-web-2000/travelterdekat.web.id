<?php

use App\Http\Controllers\LandingPage\ArchiveTravelController;
use App\Http\Controllers\LandingPage\ContactController;
use App\Http\Controllers\LandingPage\ContactFormController;
use App\Http\Controllers\LandingPage\GalleryController;
use App\Http\Controllers\LandingPage\HomeController;
use App\Http\Controllers\LandingPage\SingleTravelController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');

Route::prefix('travel')->group(function () {

    Route::get('/', ArchiveTravelController::class)->name('travel.archive');

    Route::prefix('/{originName}/{destinationName}/{originId}/{destinationId}')->group(function () {
        Route::get('/', SingleTravelController::class)->name('travel.show');
        Route::get('/thumbnail.jpg', SingleTravelController::class)->name('travel.show.thumbnail');
    });
});

Route::get('/galeri', GalleryController::class)->name('gallery');

Route::prefix('/kontak')->group(function () {
    Route::get('/', ContactController::class)->name('contact');
    Route::post('/', ContactFormController::class)->name('contact.form');
});

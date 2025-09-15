<?php

use App\Http\Controllers\LandingPage\ArchiveTravel;
use App\Http\Controllers\LandingPage\ContactController;
use App\Http\Controllers\LandingPage\ContactFormController;
use App\Http\Controllers\LandingPage\GalleryController;
use App\Http\Controllers\LandingPage\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');

Route::prefix('travel')->group(function () {

    Route::get('/', ArchiveTravel::class)->name('travel.archive');

    Route::prefix('/{asal}/{tujuan}/{asalId}/{tujuanId}')->group(function () {
        Route::get('/', HomeController::class)->name('travel.show');
        Route::get('/thumbnail.jpg', HomeController::class)->name('travel.show.thumbnail');
    });
});

Route::get('/galeri', GalleryController::class)->name('gallery');

Route::prefix('/kontak')->group(function () {
    Route::get('/', ContactController::class)->name('contact');
    Route::post('/', ContactFormController::class)->name('contact.form');
});

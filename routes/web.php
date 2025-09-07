<?php

use App\Http\Controllers\LandingPage\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');

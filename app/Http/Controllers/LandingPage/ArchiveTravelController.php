<?php

namespace App\Http\Controllers\LandingPage;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProvinceController;

class ArchiveTravelController extends Controller
{
    public function __invoke()
    {
        return view('pages.travel.archive', [
            'page' => 'Arsip Travel Terdekat',
            'title' => 'Arsip Travel Terdekat',
            'description' => 'Tersedia lengkap ' . Str::lower(web()->tagline),
        ]);
    }
}

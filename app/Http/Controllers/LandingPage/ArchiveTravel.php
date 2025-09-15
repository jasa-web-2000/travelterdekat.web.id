<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ProvinceController;
use Illuminate\Http\Request;

class ArchiveTravel extends Controller
{
    public function __invoke()
    {

        return view('pages.travel.archive', [
            'page' => 'Arsip Travel Terdekat',
        ]);
    }
}

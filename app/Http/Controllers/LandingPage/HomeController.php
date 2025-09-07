<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('pages.home', [
            'thumbnail' => [
                'url' => asset(web()->defaultLogo),
                'width' => 672,
                'height' => 672,
                'alt' => "Logo " . web()->title,
            ],
        ]);
    }
}

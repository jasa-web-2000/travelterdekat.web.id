<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __invoke()
    {
        return view('pages.contact', [
            'page' => 'Kontak',
        ]);
    }
}

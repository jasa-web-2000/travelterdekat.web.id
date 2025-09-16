<?php

namespace App\Http\Controllers\LandingPage;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ThumbnailController;

class SingleTravelController extends Controller
{
    public function __invoke($originName, $destinationName, $originId, $destinationId)
    {
        $origin = location($originId, $originName);
        $destination = location($destinationId, $destinationName);

        if ($originId == $destinationId || !$origin || !$destination) {
            abort(404);
        }

        $travel = "Travel $origin->name $destination->name";

        if (request()->routeIs('travel.show.thumbnail')) {
            $thumbnail = new ThumbnailController;
            return $thumbnail(['Travel', Str::title($origin->name), Str::title($destination->name)]);
        }

        return view('pages.travel.single', [
            'page' => $travel,
            'title' => "$travel Murah Untuk Hari Ini",
            'description' => "$travel hari ini dengan sistem door to door, PP, harga murah, jadwal 24 jam, via tol, dan bonus makan",
            'thumbnail' => route('travel.show.thumbnail', compact(
                'originName',
                'originId',
                'destinationName',
                'destinationId'
            )),
        ]);
    }
}

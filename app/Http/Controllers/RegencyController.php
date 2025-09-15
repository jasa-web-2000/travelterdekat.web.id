<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class RegencyController extends Controller
{
    public $data;

    public function __construct()
    {
        $jsonFilePath = storage_path('/app/public/data/regencies.json');

        $json = File::get($jsonFilePath);

        $this->data = collect(json_decode($json))->values();
    }


    public function __invoke()
    {
        return $this->data;
    }
}

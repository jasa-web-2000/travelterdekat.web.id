<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchFormRequest;
use Illuminate\Http\Request;

class SearchFormController extends Controller
{
    public function __invoke(SearchFormRequest $request)
    {
        dd('test');
        $validated = $request->validated();
    }
}

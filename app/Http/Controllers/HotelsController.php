<?php

namespace App\Http\Controllers;

use App\Models\Hotels;
use Illuminate\Http\JsonResponse;

class HotelsController extends Controller
{
    public function getAllHotels() : JsonResponse
    {
        $hotels = Hotels::all();
        return response()->json($hotels);
    }
}

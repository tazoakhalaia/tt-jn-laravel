<?php

namespace App\Http\Controllers;

use App\Http\Requests\ToursRequests\TourRequest;
use App\Models\Tours;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ToursController extends Controller
{
    public function getTours() : JsonResponse
    {
        $tours = Tours::all();
        return response()->json(['data' => $tours, 'success' => true]);
    }

    public function store(TourRequest $tourRequest, Tours $tours) : JsonResponse
    {
        $tours = Tours::create([
            ...$tourRequest->validated()
        ]);

        return response()->json(['message' => 'Tour Created Successfully', 'tours' => $tours, 'success' => true]);
    }
    
}

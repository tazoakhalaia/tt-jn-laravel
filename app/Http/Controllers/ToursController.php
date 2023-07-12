<?php

namespace App\Http\Controllers;

use App\Http\Requests\ToursRequests\TourRequest;
use App\Models\Tours;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ToursController extends Controller
{
    public function getTours(Request $request) : JsonResponse
    {
        $tours = Tours::query();
        $ageRestriction = $request->input('ageRestriction');
        $stopLocation = $request->input('stopLocation');
        $Difficulty = $request->input('difficulty');

        if($ageRestriction){
            if ($ageRestriction > 18) {
                $tours->where('age_restriction', '>', 18);
            } else {
                $tours->where('age_restriction', '<', 18);
            }
        }

        if($stopLocation){
            $tours->where('stop_location', $stopLocation);
        }

        if($Difficulty)
        {
            $tours->where('difficulty', $Difficulty);
        }

        $toursData = $tours->get();

        return response()->json(['data' => $toursData, 'success' => true]);
    }

    public function store(TourRequest $tourRequest, Tours $tours) : JsonResponse
    {
        $tours = Tours::create([
            ...$tourRequest->validated()
        ]);

        return response()->json(['message' => 'Tour Created Successfully', 'tours' => $tours, 'success' => true]);
    }
    
}

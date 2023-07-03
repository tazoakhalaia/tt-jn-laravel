<?php

namespace App\Http\Controllers;

use App\Http\Requests\HotelsRequests\HotelsRequest;
use App\Models\Hotels;
use App\Models\User;
use Illuminate\Http\JsonResponse;

class HotelsController extends Controller
{
    public function getUserHotels($id)
    {
        $hotels = Hotels::Where('user_id', $id)->first();
        if($hotels)
        {
            return response()->json(['message' => 'ok', 'user' => $hotels->all()]);
        }
    }

    public function getAllHotels() : JsonResponse
    {
        $hotels = Hotels::all();
        return response()->json($hotels);
    }

    public function store(HotelsRequest $hotelsRequest, Hotels $hotels) : JsonResponse
    {
        $hotels = Hotels::create([
            ...$hotelsRequest->validated()
        ]);
        return response()->json(['message' => 'Hotels Created Successfully', 'hotel' => $hotels]);
    }
}

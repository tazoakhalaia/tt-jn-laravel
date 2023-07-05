<?php

namespace App\Http\Controllers;

use App\Http\Requests\HotelsRequests\HotelsRequest;
use App\Http\Requests\HotelsRequests\UpdateHotelsRequest;
use App\Models\Hotels;
use Illuminate\Http\JsonResponse;

class HotelsController extends Controller
{
    public function getUserHotels($id)
    {
        $hotels = Hotels::Where('user_id', $id)->first();
        if($hotels)
        {
            return response()->json(['message' => 'ok', 'user' => $hotels->all(), 'success' => true]);
        }
        
        return response()->json(['message' => 'User not found']);
    }

    public function getAllHotels() : JsonResponse
    {
        $hotels = Hotels::all();
        return response()->json(['data' => $hotels, 'success' => true]);
    }

    public function store(HotelsRequest $hotelsRequest, Hotels $hotels) : JsonResponse
    {
        $hotels = Hotels::create([
            ...$hotelsRequest->validated()
        ]);
        return response()->json(['message' => 'Hotels Created Successfully', 'data' => $hotels, 'success' => true]);
    }

    public function update(UpdateHotelsRequest $updateHotelsRequest, Hotels $hotels) : JsonResponse
    {
        $hotels->update($updateHotelsRequest->validated());
        return response()->json(['message' => 'Hotel updated Successfully', 'success' => true ]);
    }
}

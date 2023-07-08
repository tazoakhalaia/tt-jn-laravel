<?php

namespace App\Http\Controllers;

use App\Http\Requests\HotelsRequests\HotelsRequest;
use App\Http\Requests\HotelsRequests\UpdateHotelsRequest;
use App\Models\Hotels;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class HotelsController extends Controller
{
    public function getHotelById($id)
    {
        $hotels = Hotels::Where('id', $id)->first();
        if($hotels)
        {
            return response()->json(['message' => 'ok', 'data' => $hotels, 'success' => true]);
        }
        
        return response()->json(['message' => 'Hotel not found', 'success' => false]);
    }

    public function getAllHotels(Request $request) : JsonResponse
    {
        $hotels = Hotels::query();
        $locationName = $request->input('locationName');

        $sort = $request->input('sort');
        if ($sort) {
            $hotels->orderBy('price_daily', $sort);
        }
        
        if ($locationName) {
            $hotels->filterByLocationName($locationName);
        }

        $hotelsData = $hotels->get();
        
        return response()->json(['data' => $hotelsData, 'success' => true]);
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

    public function destroy(Hotels $hotels) : JsonResponse
    {
        $hotels->delete();
        return response()->json(['message' => 'Hotel delated', 'success' => true]);
    }
}

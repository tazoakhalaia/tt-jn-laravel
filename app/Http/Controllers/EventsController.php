<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventsRequests\EventsRequest;
use App\Http\Requests\EventsRequests\UpdateEventsRequest;
use App\Models\Events;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function getAllEvents(Request $request) : JsonResponse
    {
        $events = Events::query();
        $locationName = $request->input('locationName');
        $sort = $request->input('sort');

        if ($sort) {
            $events->orderBy('price', $sort);
        }
        if ($locationName) {
            $events->filterByLocationName($locationName);
        }


        $eventsData = $events->get();
        
        return response()->json(['data' => $eventsData, 'success' => true]);
    }

    public function postEventsRequest(EventsRequest $eventsRequest, Events $events) : JsonResponse
    {
        $events = Events::create([
            ...$eventsRequest->validated()
        ]);
        
        return response()->json(['message' => 'Event Created Successfully', 'events' => $events, 'success' => true]);
    }

    public function destroy(Events $events) : JsonResponse
    {
        $events->delete();
        return response()->json(['message' => 'Event Deleted Successfully', 'success' => true]);
    }

    public function update(UpdateEventsRequest $updateEventsRequest, Events $events) : JsonResponse
    {
        $events->update($updateEventsRequest->validated());
        return response()->json(['message' => 'Event Updated Successfully', 'success' => true]);
    }
}

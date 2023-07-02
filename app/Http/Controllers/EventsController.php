<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventsRequests\EventsRequest;
use App\Http\Requests\EventsRequests\UpdateEventsRequest;
use App\Models\Events;
use Illuminate\Http\JsonResponse;

class EventsController extends Controller
{
    public function getAllEvents() : JsonResponse
    {
        $events = Events::all();
        return response()->json($events);
    }

    public function postEventsRequest(EventsRequest $eventsRequest, Events $events) : JsonResponse
    {
        $events = Events::create([
            ...$eventsRequest->validated()
        ]);
        
        return response()->json(['message' => 'Event Created Successfully', 'events' => $events]);
    }

    public function destroy(Events $events) : JsonResponse
    {
        $events->delete();
        return response()->json(['message' => 'Event Deleted Successfully']);
    }

    public function update(UpdateEventsRequest $updateEventsRequest, Events $events) : JsonResponse
    {
        $events->update($updateEventsRequest->validated());
        return response()->json(['message' => 'Event Updated Successfully']);
    }
}

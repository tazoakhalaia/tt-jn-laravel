<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventsRequest;
use App\Models\Events;
use Illuminate\Http\JsonResponse;

class EventsController extends Controller
{
    public function getAllEvents() : JsonResponse
    {
        $events = Events::all();
        return response()->json($events);
    }

    public function sendEventsRequest(EventsRequest $eventsRequest, Events $events) : JsonResponse
    {
        $events = Events::create([
            ...$eventsRequest->validated()
        ]);
        
        return response()->json(['message' => 'Event Created Successfully', 'events' => $events]);
    }
}

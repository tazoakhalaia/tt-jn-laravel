<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Http\JsonResponse;

class EventsController extends Controller
{
    public function getAllEvents() : JsonResponse
    {
        $events = Events::all();
        return response()->json($events);
    }
}

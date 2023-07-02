<?php

use App\Http\Controllers\EventsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(EventsController::class)->group(function () {
    Route::get('/events', 'getAllEvents')->name('events.get');
    Route::post('/events', 'postEventsRequest')->name('events.post');
    Route::delete('/events/{events}', 'destroy')->name('events.delete');
});
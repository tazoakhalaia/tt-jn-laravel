<?php

use App\Http\Controllers\EventsController;
use App\Http\Controllers\HotelsController;
use App\Http\Controllers\ToursController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(EventsController::class)->group(function () {
    Route::get('/events', 'getAllEvents')->name('events.get');
    Route::post('/events', 'postEventsRequest')->name('events.post');
    Route::delete('/events/{events}', 'destroy')->name('events.delete');
    Route::put('/events/{events}', 'update')->name('events.update');
});

Route::controller(HotelsController::class)->group(function () {
    Route::get('/hotels/{id}', 'getHotelById')->name('hotels.get.by.id');
    Route::get('/hotels', 'getAllHotels')->name('hotels.get');
    Route::post('/hotels', 'store')->name('hotels.post');
    Route::put('/hotels/{hotels}', 'update')->name('hotels.update');
    Route::delete('/hotels/{hotels}', 'destroy')->name('hotels.destroy');
});

Route::controller(ToursController::class)->group(function () {
    Route::get('/tours', 'getTours')->name('tour.get');
    Route::post('/tours', 'store')->name('tour.post');
    Route::delete('/tours/{tours}', 'destroy')->name('tours.destroy');
    Route::put('/tours/{tours}', 'update')->name('tours.update');
});
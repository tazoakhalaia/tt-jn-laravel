<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  
    public function up(): void
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string('hotel_name');
            $table->string('hote_location');
            $table->string('hotel_description');
            $table->string('hotel_host_number');
            $table->string('hotel_rooms');
            $table->string('hot_water');
            $table->string('heating');
            $table->string('internet');
            $table->string('air_condition');
            $table->string('closet');
            $table->string('tv');
            $table->string('garden');
            $table->string('car_parking');
            $table->enum('type', ['guesthouse', 'cottage', 'hotel']);
            $table->string('view');
            $table->string('pet_friendly');
            $table->string('available_time');
            $table->string('price_daily');
            $table->string('price_monthly');
            $table->string('price_yearly');
            $table->timestamps();
        });
    }

 
    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};

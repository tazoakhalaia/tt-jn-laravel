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
            $table->string('hotel_location');
            $table->string('hotel_description');
            $table->integer('hotel_host_number');
            $table->integer('hotel_rooms');
            $table->boolean('hot_water');
            $table->boolean('heating');
            $table->boolean('internet');
            $table->boolean('air_condition');
            $table->boolean('closet');
            $table->boolean('tv');
            $table->boolean('garden');
            $table->boolean('car_parking');
            $table->enum('type', ['Guesthouse', 'Cottage', 'Hotel']);
            $table->enum('currency', ['USD','GEL','GBP','EUR']);
            $table->string('view');
            $table->boolean('pet_friendly');
            $table->string('available_time');
            $table->string('price_daily');
            $table->string('price_monthly')->nullable();
            $table->integer('discount')->nullable();
            $table->boolean('active')->default(false);
            $table->enum('success', ['Pending', 'Success', 'Rejected'])->default('Pending');
            $table->foreignId('user_id');
            $table->timestamps();
        });
    }

 
    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('tour_guide');
            $table->integer('duration');
            $table->integer('max_group_size');
            $table->enum('difficulty', ['Easy','Medium', 'Difficult']); 
            $table->integer('ratings_average');
            $table->integer('ratings_quantity');
            $table->string('price');
            $table->string('age_restriction')->nullable();
            $table->string('stop_location');
            $table->string('tour_begin'); 
            $table->string('type');
            $table->integer('price_discount')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tours');
    }
};

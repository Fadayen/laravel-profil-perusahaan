<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
         Schema::create('properties', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('location');
        $table->decimal('price_min', 15, 2);
        $table->decimal('price_max', 15, 2)->nullable();
        $table->string('status');
        $table->string('image')->nullable();
        $table->string('bedrooms');
        $table->string('bathrooms');
        $table->string('size');
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};

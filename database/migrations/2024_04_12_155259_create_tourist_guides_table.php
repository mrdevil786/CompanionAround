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
        Schema::create('tourist_guides', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tourist_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('tour_guide_id')->nullable()->constrained()->nullOnDelete();
            $table->json('guide_data')->nullable();
            $table->json('tourist_data')->nullable();
            $table->dateTime('connected_at')->nullable();
            $table->string('status')->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tourist_guides');
    }
};

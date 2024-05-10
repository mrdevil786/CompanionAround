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
        Schema::create('direct_trips', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tourist_id')->nullable()->constrained()->cascadeOnDelete();
            $table->string('where_you_go');
            $table->date('from_date')->nullable();
            $table->date('to_date')->nullable();
            $table->string('no_of_people')->nullable();
            $table->text('message')->nullable();
            $table->string('looking_for')->nullable();
            $table->string('status')->default('open');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('direct_trips');
    }
};

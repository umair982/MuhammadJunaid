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
        Schema::create('about_counters', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // e.g., "Years of Experience"
            $table->integer('count'); // e.g., 10
            $table->string('suffix')->nullable(); // e.g., "+"
            $table->integer('order')->default(0); // for sorting multiple counters
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_counters');
    }
};

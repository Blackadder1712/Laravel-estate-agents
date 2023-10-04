<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration //manage changes to database
{
    /**
     * Run the migrations.
     */
    public function up(): void//adds changes
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void //removes changes 
    {
        Schema::dropIfExists('listings');
    }
};

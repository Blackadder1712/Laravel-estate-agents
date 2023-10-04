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
        Schema::table('listings', function (Blueprint $table) { 
            //what i want to do tolistings table 
            $table->unsignedTinyInteger('beds');//small number 
            $table->unsignedTinyInteger('baths');//small number 
            $table->unsignedSmallInteger('area');//small number 

            $table->tinyText('city'); //small words 
            $table->tinyText('code');
            $table->tinyText('street');
            $table->tinyText('street_nr');

            $table->unsignedInteger('price');//normal number 


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
        Schema::dropColumns('listings',
        [
            'beds', 'baths', 'area', 'city', 'code', 'street', 'street_nr',
        ]);
    }
};

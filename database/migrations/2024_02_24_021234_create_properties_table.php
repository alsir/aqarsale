<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained('customers');
            $table->foreignId('area_id')->constrained('areas');
            $table->foreignId('category_id')->constrained('categories');
            $table->string('main_photo');
            $table->string('address_ar');
            $table->string('address_en');
            $table->longText('description_en');
            $table->longText('description_ar');
            $table->double('longitude' , 10,6);
            $table->double('latitude' , 10,6);
            $table->integer('squaresmeters');
            $table->integer('bathrooms_number');
            $table->integer('bedrooms_number');
            $table->integer('halls_number');
            $table->integer('level');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
};

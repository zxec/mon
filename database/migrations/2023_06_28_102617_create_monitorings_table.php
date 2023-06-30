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
        Schema::create('monitorings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('city_id');
            $table->string('city');
            $table->string('street');
            $table->string('house_number');
            $table->double('latitude');
            $table->double('longitude');
            $table->bigInteger('entrance');
            $table->bigInteger('floor');
            $table->bigInteger('number_of_stickers');
            $table->boolean('competitor')->comment('Наличие конкурента');
            $table->unsignedBigInteger('master_id');
            $table->string('master');
            $table->date('date');
            $table->unsignedBigInteger('apply_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monitorings');
    }
};

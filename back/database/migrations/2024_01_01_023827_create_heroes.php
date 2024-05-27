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
        Schema::create('heroes', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->unsignedBigInteger('place_id');
            $table->unsignedBigInteger('first_rol_id');
            $table->unsignedBigInteger('second_rol_id')->nullable();
            $table->unsignedBigInteger('first_type_power_id');
            $table->unsignedBigInteger('second_type_power_id')->nullable();
            $table->enum('durability', ['feaw', 'normal', 'good', 'lot_of']);
            $table->enum('ofensive_power', ['feaw', 'normal', 'good', 'lot_of']);
            $table->enum('effect_of_control', ['feaw', 'normal', 'good', 'lot_of']);
            $table->enum('difficulty', ['feaw', 'normal', 'good', 'lot_of']);
            $table->dateTime('created_at');
            $table->unsignedBigInteger('created_by');
            $table->dateTime('updated_at')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            
            $table->foreign('place_id')->references('id')->on('places');
            $table->foreign('first_rol_id')->references('id')->on('roles');
            $table->foreign('second_rol_id')->references('id')->on('roles');
            $table->foreign('first_type_power_id')->references('id')->on('types_powers');
            $table->foreign('second_type_power_id')->references('id')->on('types_powers');
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('heroes');
    }
};

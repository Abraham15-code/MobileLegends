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
        // SEPARAR LAS TABLAS DE HEROES
        Schema::create('heroes_features', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('heroe_id');
            $table->text('history');
            $table->integer('hp');
            $table->float('regen_hp',6,2);
            $table->integer('physycal_attack');
            $table->integer('physycal_defense');
            $table->integer('attack_speed');
            $table->integer('percent_attack_speed');
            $table->integer('mana');
            $table->float('regen_mana',6,2);
            $table->integer('magic_power');
            $table->integer('magic_defense');
            $table->integer('speed_of_movement');
            $table->dateTime('created_at');
            $table->unsignedBigInteger('created_by');
            $table->dateTime('updated_at')->nullable(true);
            $table->unsignedBigInteger('updated_by')->nullable(true);

            $table->foreign('heroe_id')->references('id')->on('heroes');
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('heroes_features');
    }
};

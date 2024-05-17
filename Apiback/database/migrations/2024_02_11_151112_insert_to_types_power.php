<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('types_powers')->INSERT([
          [
            'name' => 'Carga',
            'created_at' => DB::raw('NOW()'),
            'created_by' => 1
          ],
          [
            'name' => 'Daño explosivo',
            'created_at' => DB::raw('NOW()'),
            'created_by' => 1
          ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('types_power', function (Blueprint $table) {
            //
        });
    }
};

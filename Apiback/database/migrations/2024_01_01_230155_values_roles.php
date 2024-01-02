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
        DB::unprepared('SET FOREIGN_KEY_CHECKS = 0;');
        DB::unprepared('TRUNCATE TABLE roles;');
        DB::table('roles')->insert([
            [
                'name' => 'Tanque',
                'description' => '',
                'created_at' => DB::raw('NOW()'),
                'created_by'=> 1,
            ],
            [
                'name' => 'Combatiente',
                'description' => '',
                'created_at' => DB::raw('NOW()'),
                'created_by'=> 1,
            ],
            [
                'name' => 'Tirador',
                'description' => '',
                'created_at' => DB::raw('NOW()'),
                'created_by'=> 1,
            ],
            [
                'name' => 'Mago',
                'description' => '',
                'created_at' => DB::raw('NOW()'),
                'created_by'=> 1,
            ],
            [
                'name' => 'Apoyo',
                'description' => '',
                'created_at' => DB::raw('NOW()'),
                'created_by'=> 1,
            ],
            [
                'name' => 'Asesino',
                'description' => '',
                'created_at' => DB::raw('NOW()'),
                'created_by'=> 1,
            ],
        ]);
        DB::unprepared('SET FOREIGN_KEY_CHECKS = 1;');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // 
    }
};

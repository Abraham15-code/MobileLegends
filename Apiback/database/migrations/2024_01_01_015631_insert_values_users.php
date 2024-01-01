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
        DB::unprepared("SET FOREIGN_KEY_CHECKS=0;");
        DB::unprepared("TRUNCATE TABLE users;");
        DB::table('users')->insert([
            [
                'id' => 0,
                'first_name' => 'System',
                'last_name' => 'System',
                'email' => 'systema@gmail.com',
                'password' => '123456',
                'expiration_password' => DB::raw('DATE_ADD(NOW(), INTERVAL 1 MONTH)'),
                'created_at' => DB::raw('NOW()'),
                'created_by' => 0
            ],
            [
                'id' => 0,
                'first_name' => 'Abraham',
                'last_name' => 'Flores',
                'email' => 'abraham@gmail.com',
                'password' => '123456',
                'expiration_password' => DB::raw('DATE_ADD(NOW(), INTERVAL 1 MONTH)'),
                'created_at' => DB::raw('NOW()'),
                'created_by' => 0
            ],
        ]);
        DB::unprepared("SET FOREIGN_KEY_CHECKS=1;");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared("SET FOREIGN_KEY_CHECKS=0;");
        DB::unprepared("TRUNCATE TABLE users;");
        DB::unprepared("SET FOREIGN_KEY_CHECKS=1;");
    }
};

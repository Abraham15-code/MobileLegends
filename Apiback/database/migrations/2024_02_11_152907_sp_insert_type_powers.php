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
        $procedure = "CREATE PROCEDURE sp_insert_type_powers
        (
            IN p_name VARCHAR(50),
            IN p_created_by INT
        )
        BEGIN 
        
            DECLARE v_duplicy INT DEFAULT ( SELECT COUNT(tp.id) FROM types_powers tp WHERE tp.name = p_name);
        
            IF (v_duplicy > 0) THEN
                SELECT 1 duplicy, '[]' last_insert; 
            ELSE 
                INSERT INTO types_powers (name, created_by) VALUES (p_name, p_created_by);
                SET @last_id = LAST_INSERT_ID();
                SELECT 0 duplicy, JSON_ARRAYAGG(JSON_OBJECT('id', tp.id, 'name', tp.name, 'created_at', tp.created_at, 'created_by', tp.created_by)) last_insert 
                FROM types_powers tp WHERE id = @last_id;
            END IF;
        
        END;
        ";
        DB::unprepared("DROP PROCEDURE IF EXISTS sp_insert_type_powers;");
        DB::unprepared($procedure);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

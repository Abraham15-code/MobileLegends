<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $procedure = "CREATE PROCEDURE sp_get_places
        (
            IN p_place_id INT
        )
        BEGIN 
        
            DECLARE v_total_registers INT DEFAULT 0;
        
            DROP TEMPORARY TABLE IF EXISTS places_temporary;
            CREATE TEMPORARY TABLE places_temporary 
            ENGINE = InnoDB
            AS (
                SELECT p.id,
                        p.name,
                        p.description,
                        p.image,
                        p.title,
                        (
                            SELECT JSON_ARRAYAGG(
                                        JSON_OBJECT(
                                            'id',p2.id,
                                            'name', p2.name,
                                            'title', p2.title
                                        )
                                    ) 
                            FROM places p2 
                            WHERE p2.parent_id = p.id
                        ) sub_places
                FROM places p
                WHERE p.p_place_id IS NULL OR (p.id = p_place_id)
            );
        
            SET v_total_registers = ( SELECT count(id) FROM places_temporary);
        
            -- FALTA REALIZAR LA PAGINACION
            SELECT *, v_total_registers FROM places_temporary;
        END;";
        DB::unprepared("DROP PROCEDURE IF EXISTS sp_get_places;");
        DB::unprepared($procedure);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared("DROP PROCEDURE IF EXISTS sp_get_places;");
    }
};

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
        $procedure = "CREATE PROCEDURE sp_get_roles 
        (
            IN p_rol_id INT
        )
        BEGIN 
        
            DECLARE v_total_registers INT DEFAULT 0;
        
            DROP TEMPORARY TABLE roles_temporary;
            CREATE TEMPORARY TABLE roles_temporary
            ENGINE = InnoDB
            (
                SELECT r.id,
                    r.name,
                    r.description,
                    (
                        SELECT JSON_ARRAYAGG(
                                            JSON_OBJECT(
                                                'id',h.id,
                                                'name', h.name
                                            )
                                        ) 
                        FROM heroes h
                        WHERE (h.first_rol_id = r.id)
                        ORDER BY h.id DESC
                        LIMIT 5
                    ) heroes
                FROM roles r
                WHERE (p_rol_id IS NULL OR r.id = p_rol_id)
            );
        
            SET v_total_registers = ( SELECT count(id) FROM roles_temporary);
            SELECT *, v_total_registers FROM roles_temporary;
        
        END;";
        DB::unprepared("DROP PROCEDURE IF EXISTS sp_get_roles;");
        DB::unprepared($procedure);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared("DROP PROCEDURE IF EXISTS sp_get_roles;");
    }
};

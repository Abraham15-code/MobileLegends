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
        $procedure = "CREATE PROCEDURE sp_save_items
        (
            IN p_id INT,
            IN p_name VARCHAR(100),
            IN p_description VARCHAR(500),
            IN p_parent_id INT,
            IN p_type_damage INT,
            IN p_user_id INT
        )
        BEGIN 
        
            DECLARE v_duplicity INT DEFAULT (SELECT count(i.id) FROM items i WHERE (p_id IS NULL OR i.id <> p_id) AND i.name = p_name);
            DECLARE v_id INT DEFAULT (p_id);
        
            IF (v_duplicity > 0) THEN 
                SELECT 1 duplicity;
        
            ELSEIF (p_id IS NULL) THEN
                INSERT INTO items (name, description, parent_id, type_damage, created_by, created_at) VALUES (p_name, p_description, p_parent_id, p_type_damage, p_user_id, NOW());
                SET v_id = LAST_INSERT_ID();
            ELSE
                UPDATE items SET name = p_name, description = p_description, parent_id = p_parent_id, type_damage = p_type_damage, updated_by = p_user_id, updated_at = NOW()
                WHERE id = p_id;
            END IF; 
           
            IF (v_duplicity = 0) THEN 
                SELECT 0 duplicity, * FROM items i WHERE id = v_id;
            END IF;
        END;";

        DB::unprepared('DROP PROCEDURE IF EXISTS sp_save_items;');
        DB::unprepared($procedure);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared('DROP PROCEDURE IF EXISTS sp_save_items;');
    }
};

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
        // to place tierras valdias
        DB::table('places')->insert([
            [
                'name'=> 'Grieta del Abismo',
                'title'=>'El origen de toda oscuridad y maldad',
                'description'=> 'Al final de la Era Dorada, el Abismo emergio del suelo de la nada, rompiendo el suelo y las rocas, formando una enorme grieta: la Grieta del Abismo. 
                No se puede ver hasta el fondo y el poderoso poder oscuro llena toda la grieta y continua extendiendose en todas direcciones. Tan pronto como la gente comun entra en las cercanias de la Grieta 
                del Abismo, sufren una intensa corrosion y tortura.',
                'parent_id'=> 2,
                'image' => 'places/image.png',
                'created_at'=> DB::raw('now()'),
                'created_by' => 1,
                'updated_at' => null,
                'updated_by' => null
            ],
            [
                'name'=> 'Montañas lantis',
                'title'=>'Montañas que bloquean la corrosion del Abismo',
                'description'=> 'Las Montañas Lantis constituyen la cadena montañosa mas larga de la tierra del Amanecer. Aislan al Imperio Moniyan de la tierra de la Desesperacion 
                y evitan que el Abismo se extienda mas. Se dice que las montañas fueron una vez la residencia de los Antiguos, y hay leyendas y fuerzas poderosas sobre los Antiguos, 
                pero nadie ha podido encontrar su existencia hasta la fecha.',
                'parent_id'=> 2,
                'image' => 'places/image.png',
                'created_at'=> DB::raw('now()'),
                'created_by' => 1,
                'updated_at' => null,
                'updated_by' => null
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

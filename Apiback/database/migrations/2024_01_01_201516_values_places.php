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
        DB::unprepared('SET FOREIGN_KEY_CHECKS=0;');
        DB::unprepared('TRUNCATE TABLE places;');
        DB::table('places')->insert([
            [
                'name'=> 'Tierras Aridas de Agelta',
                'description'=> 'Esta zona desertica en la parte occidental del continente tienen un clima servere, pero hay una gran cantidad de antiguos laberintos
                deserticos y reliquias de la Ruta Esmeralda, que atren a los aventureros del continente para continuar explorando.',
                'parent_id'=> null,
                'image' => 'places/image.png',
                'created_at'=> DB::raw('now()'),
                'created_by' => 1,
                'updated_at' => null,
                'updated_by' => null
            ],
            [
                'name'=> 'Tierras Baldias',
                'description'=> 'Las Tierras Baldias es una tierra de desesperacion. Era muy prospero aqui pero con el nacimiento de Necrokeep y el ascenso del Abismo, perdio por completo su prosperidad.',
                'parent_id'=> null, 
                'image' => 'places/image.png',
                'created_at'=> DB::raw('now()'),
                'created_by' => 1,
                'updated_at' => null,
                'updated_by' => null
            ],
            [
                'name'=> 'Moniyan',
                'description'=> 'Aunque no ha recuperado su antigua gloria, el renacido Impreion Moniyan sigue siendo la feurza politica mas importante en el Tierra del Amanecer.',
                'parent_id'=> null, 
                'image' => 'places/image.png',
                'created_at'=> DB::raw('now()'),
                'created_by' => 1,
                'updated_at' => null,
                'updated_by' => null
            ],
            [
                'name'=> 'Valle del Norte',
                'description'=> 'El Valle del Norte se encuentra en la parte mas septentrional de la Tierra del Amanecer y es el lugar mas frio del continente. El ambiente extremadamente duro ha creado las caracteristicas 
                obstinadas e inflexibles de la gente del Valle del Norte.',
                'parent_id'=> null, 
                'image' => 'places/image.png',
                'created_at'=> DB::raw('now()'),
                'created_by' => 1,
                'updated_at' => null,
                'updated_by' => null
            ],
            [
                'name'=> 'Bosques de Azrya',
                'description'=> 'Azrya significa "Tierra de la Esperanza" en la lengua Elfica. Es el hogar de los Elfos, una vasta y exuberante region boscosa llena de rios y lagos.',
                'parent_id'=> null, 
                'image' => 'places/image.png',
                'created_at'=> DB::raw('now()'),
                'created_by' => 1,
                'updated_at' => null,
                'updated_by' => null
            ],
            [
                'name'=> 'Islas Vonetis',
                'description'=> 'Las Islas Vonetis son el hogar del pueblo Dorik. Las islas son un lugar ideal para vivir y un puerto natural con sus hermosos paisajes y clima agradable. Las islas conservan muchas de las 
                costumbres populares del pueblo Dorik.',
                'parent_id'=> null, 
                'image' => 'places/image.png',
                'created_at'=> DB::raw('now()'),
                'created_by' => 1,
                'updated_at' => null,
                'updated_by' => null
            ],
            [
                'name'=> 'Tierras del Rio Cadia',
                'description'=> 'Aislada del mundo, es es una tierra antigua unica en su tipo. La armonia de todas las cosas es la filosofia de supervivencia de las tierras del Rio Cadia. Todas las razas viven en armonia 
                aqui bajo la proteccion del Gran Dragon.',
                'parent_id'=> null, 
                'image' => 'places/image.png',
                'created_at'=> DB::raw('now()'),
                'created_by' => 1,
                'updated_at' => null,
                'updated_by' => null
            ],
        ]);
        DB::unprepared('SET FOREIGN_KEY_CHECKS=1;');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        /*
        [
            'name'=> 'Laberinto Minoico',
            'description'=> 'Los retos de la civilizacion Minotauro al final de la Era de los conflictos. Despues de la civilizacion de Minotauro, el Laberinto Minoico
             se cubrio con un velo de misterio. Algunas personas dicen que solo se puede ingresar al legendario castillo Minotauro a traves del Laberinto de Minos. Otros dicen que hay muchis misterios sobre 
             el Orbe crepuscular y los Antiguos enterrados en Minos.',
            'parent_id'=> 1,
            'image' => 'places/image.png',
            'created_at'=> DB::raw('now()'),
            'created_by' => 1
        ],
        [
            'name'=> 'Ruinas de Tivacan',
            'description'=> 'Siuada en el punto mas occidental de Agelta, alguna vez fue la ciudad-estado mas prospera y poderosa del oeste. Pero despues de que paso la prosperidad 
            esta antigua y gloriosa ciudad sigui al tirano Khufra hasta la tumba, todos sus habitantes desaparecieron y la antigua ciudad se convirtio en un lugar prohibido que infunde miedo en los corazones de quienes
             escuchan su nombre. Y en la parte mas profuna de la coudad antigua, un tirano poderoso y brutal--Khufra fue sellado.',
            'parent_id'=> 1,
            'image' => 'places/image.png',
            'created_at'=> DB::raw('now()'),
            'created_by' => 1
        ],
        [
            'name'=> 'Valle Portal Estelar',
            'description'=> 'Escondido en el centro del desierto, Vale de la Puerta Estelar ha sido la residencia de los astrologos durante generaciones. Este misterioso y antiguo castillo de arena ha tenido una mision
            especial desde su nacimiento: observar y monitorear al Khufra sellado, y mantener a este malvado tirano sellado para evitar que regrese.',
            'parent_id'=> 1,
            'image' => 'places/image.png',
            'created_at'=> DB::raw('now()'),
            'created_by' => 1
        ],
        [
            'name'=> 'El Oasis',
            'description'=> 'Despues de varias catastrofes,, Agelta se volcio cada dia mas desolado y duro y las fuentes de agua y los asentamientos se convirtieron en las mayores necesidades de las personas que viajaban 
            por el desierto. Un hombre arbol llamado Belerick uso su proio poder para crear este pequeño oasis para proporcionar refucio a las caravanas que pasaban.',
            'parent_id'=> 1,
            'image' => 'places/image.png',
            'created_at'=> DB::raw('now()'),
            'created_by' => 1
        ],
        [
            'name'=> 'Camino Esmeralda',
            'description'=> 'Esta es la ruta principal para entrar y salir de Agelta. Solia estar salpicado de ciudades-estado y bazares, y las caravanas pasaban sin cesar. Pero despues de las catastrofes 
            , estas ciudades-estado quedaron devastadas. Las ciudades que alguna vez fueron prosperas y los intercambios comerciales desarrollados ya no existen. Solo las ruinas de las ciudades destruidas hablan de la 
            gloria del pasado.',
            'parent_id'=> 1,
            'image' => 'places/image.png',
            'created_at'=> DB::raw('now()'),
            'created_by' => 1
        ],
        [
            'name'=> 'Eruditio',
            'description'=> 'Eruditio, la ciudad e los eruditos, se encuentra en el medio oeste de la tierra del amanece. Alguna vez fue parte del antiguo Moniyan. Y despues del colapso del viejo imperio, Eruditio 
            se separo de la jurisdiccion imperial y abrazo la libertad y la tolerancia. Algunos eruditos y artesanos se mudaron aqui debido a la excesiva dependencia del imperio de la magia. Es verdaderamente una 
            ciudad e estudiosos.',
            'parent_id'=> 1,
            'image' => 'places/image.png',
            'created_at'=> DB::raw('now()'),
            'created_by' => 1
        ],
        [
            'name'=> 'Ciudad del Viento',
            'description'=> 'Ciudad el Viento y Garganta de Fuego se conocen como ls Ciudades Gemelas. Despues de todos los desastres que soporto Agelta, no se vieron afectados y se volvieron mas prosperos. La ciudad
            del viento y la Garganta de Fuego han mantenido la cominicacino ya l cooperacion durante generaciones. Estas dos ciudades son actualmente maestras de la cultura Eschackan, sus estilos arquitectonicos y costumbres 
            populares son altamente reconocibles y unicos.',
            'parent_id'=> 1,
            'image' => 'places/image.png',
            'created_at'=> DB::raw('now()'),
            'created_by' => 1
        ],
        [
            'name'=> 'Montañas Nubladas',
            'description'=> 'Este Oasis en el norte de Agelta es el hogar de muchas razas. Este fue el lugar de nacimiento de la toda la raza orca, pero con los cambios de tiempo, los Orcos y Minotauros se fueron de aqui uno tras otro. 
            Solo Centauros viven en las Montañas Nubladas en armonia con la tribu cercana Eschackan.',
            'parent_id'=> 1,
            'image' => 'places/image.png',
            'created_at'=> DB::raw('now()'),
            'created_by' => 1
        ],
        [
            'name'=> 'Los Pecados',
            'description'=> 'Originalmente llamado los Pecados, esta ubicado en el borde de Agelta. Despues del colapso de la alianza ciudad-estdo en Agelta, se convirtio en una tierra sin propietarios. Un grupo de soldados 
            dispersos lo ocupo y comenzo un comercio negro desordenado aqui. El contrabando, el crimen y las peleas se han convertido en sininimos de este lugar, por lo que tambien se lo conoce como Ciudad del Pecado.',
            'parent_id'=> 1,
            'image' => 'places/image.png',
            'created_at'=> DB::raw('now()'),
            'created_by' => 1
        ],
        [
            'name'=> 'Garganta de Fuego',
            'description'=> 'Ciudad el Viento y Garganta de Fuego se conocen como ls Ciudades Gemelas. Despues de todos los desastres que soporto Agelta, no se vieron afectados y se volvieron mas prosperos. La ciudad
            del viento y la Garganta de Fuego han mantenido la cominicacino ya l cooperacion durante generaciones. Estas dos ciudades son actualmente maestras de la cultura Eschackan, sus estilos arquitectonicos y costumbres 
            populares son altamente reconocibles y unicos. ',
            'parent_id'=> 1,
            'image' => 'places/image.png',
            'created_at'=> DB::raw('now()'),
            'created_by' => 1
        ],
        */
    }
};

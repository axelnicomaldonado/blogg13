<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        /**
         * Seeds de juegos
         */
        Post::factory()->create([
            'title' => "Helldivers 2: La destrucción del planeta Meridia y la creación de un agujero negro.",
            'poster' => "helldiverposter.jpg",
            'content' => "El 31 de mayo, se dió la orden suprema de nombre Paz Duradera, la cual consistía en inyectar
            fluido oscuro dentro del planeta colonizado por los termínidos para causar una implosión por la
            densificación del líquido.<br><br>El objetivo se logró con éxito. Sin embargo, al momento de ingresar al juego
            y con mi Destructor estacionado en el astro mencionado, se iniciaba un salto superlumínico de emergencia que
            nos llevaba a Supertierra, dado el peligro de permanecer cerca del agujero. Por el momento, se puede viajar 
            a Meridia para ver la impactante consecuencia de esta misión.<br><br>Y hablando de consecuencias, una gran
            parte de la comunidad teoriza que este agujero negro es un portal para la llegada de Los Iluminados, la
            temible facción ya conocida en su primera entrega.",
            'user_id' => 1,
            'category_id' => 1,
        ]);

        Post::factory()->create([
            'title' => "Enotria: The Last Song Demo - Primeras impresiones.",
            'poster' => "enotriaposter.jpg",
            'content' => "La fecha original para el estreno de Enotria era el 21 de agosto, pero se retrasó al 19
            de septiembre. Aún así, el juego actualmente dispone de una demo con una duración de ocho horas, por
            lo que decidí probar lo que tiene para ofrecer este soulslike mediterráneo. <br><br>De momento, se
            pueden utilizar cuatro clases de armas diferentes, cada una con una variedad de habilidades únicas,
            así como alternar entre varios tipos de máscaras, un item sumamente importante, ya que cada una
            posee distintos estilos y habilidades. <br><br>La ambientación y los escenarios están muy bien logrados,
            se capta una atmósfera cautivadora y una representación loquísima del folclore italiano. Existen cuatro
            estados que el jugador puede padecer, algunos dan ventajas, pero sus debilidades son siempre un punto
            negativo presente en todas estas.<br><br>A pesar de estos aspectos, el juego aún cuenta con algunas cosas
            que se podrían prestar a mejoras. El árbol de habilidades no se siente muy pulido, existen skills que
            se sienten repetitivas o que no ayudan demasiado. Los enemigos tienen ojos en la espalda,
            podés caminarles por la espalda sin que te vean, pero si te acercas demasiado, se dan media vuelta y te atacan.
            Aparte pero no menos importante, el rendimiento dentro de las ciudades es algo pésimo si se compara al de sitios
            más abiertos del mapa, pero estoy seguro que será arreglado una vez llegada la fecha de estreno. <br><br>
            El juego es disfrutable, los sets que pueden armarse variando entre las habilidades, máscaras y equipamiento
            lo hacen llamativo. Me gustaría volver a probarlo una vez haya salido a la venta.",
            'user_id' => 3,
            'category_id' => 1,
        ]);

        /**
         * Seeds de películas
         */
        Post::factory()->create([
            'title' => "Beetlejuice 2 ya tiene fecha de estreno.",
            'poster' => "beetlejuiceposter.jpg",
            'content' => "Tuvieron que pasar más de 25 años para que la icónica película de Tim Burton regresara con
            una secuela que busca superar a la original. Se estrenará en los cines el 6 de septiembre y cuenta con el
            retorno de Winona Ryder, Michael Keaton y Catherine O’Hara. <br><br>En la nueva entrega, Lydia es ahora
            una presentadora de televisión de investigación paranormal que luchará por reconectarse con su familia
            tras la muerte de su padre, y para lograrlo, buscará la ayuda de Beetlejuice.<br><br> El reparto de
            Beetlejuice 2 también incluye a otros reconocidos actores como Monica Bellucci, Willem Dafoe,
            Justin Theroux y Burn Gorman.",
            'user_id' => 2,
            'category_id' => 2,
        ]);
    }
}

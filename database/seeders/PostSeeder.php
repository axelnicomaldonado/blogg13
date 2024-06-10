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

        Post::factory()->create([
            'title' => "Titulo de prueba",
            'poster' => "Poster de prueba",
            'content' => "Contenido de relleno de prueba",
            'user_id' => 1,
        ]);

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
    }
}

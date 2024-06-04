<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $post = new Post();

        $post->title = "Titulo de prueba";
        $post->poster = "Poster de prueba";
        $post->content = "Contenido de relleno de prueba";

        $post->save();
    }
}

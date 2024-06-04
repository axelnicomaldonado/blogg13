<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getHome(){
        $posts = Post::all();

        // PARA VER LO QUE RETORNA LA BD:
        //return $posts;
        return view('/', [compact('posts')]);
    }
}

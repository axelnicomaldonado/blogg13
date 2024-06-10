<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function getHome(){
        $posts = Post::orderBy('created_at', 'desc')->get();
        $users = User::all();


        // PARA VER LO QUE RETORNA LA BD:
        //return $posts;
        return view('home', [
            "posts" => $posts,
            "users" => $users
        ]);
    }
}

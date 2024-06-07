<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class CategoryController extends Controller
{

    public function getIndex(){
        return view('category/index');
    }

    public function getShow($id){
        return view('category/show', compact('id'));
    }

    public function getEdit($id){

        $post = Post::find($id);
        return view('category/edit', [
            "post" => $post
        ]);
    }
    
    public function update(Request $request, $id){
        $post = Post::find($id);

        $post->title = $request->title;
        $post->poster = $request->poster;
        $post->content = $request->content;

        $post->save();

        return redirect('/');
    }

    public function getCreate(){
        $posts = Post::all();
        return view('category/create', [
            "posts" => $posts
        ]);
    }

}

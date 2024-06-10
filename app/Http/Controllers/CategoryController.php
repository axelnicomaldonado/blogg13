<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class CategoryController extends Controller
{

    public function getIndex(){
        $categories = Category::all();
        //return $categories;
        return view('category/index', [
            "categories" => $categories
        ]);
    }
    public function getType($id){
        $posts = Post::where('category_id', $id)->get();
        $category = Category::find($id);
        $users = User::all();

        //return $posts;
        //return $category;
        //return $users;
        return view('category/type', [
            "posts" => $posts,
            "category" => $category,
            "users" => $users
        ]);
    }

    public function getShow($id){
        $post = Post::findOrFail($id);
        return view('category/show', compact('post'));
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
        $post->user_id = $request->user_id;

        $post->save();

        return redirect('/');
    }

    public function store(Request $request){

        Post::create([
            'title' => $request->title,
            'poster' => $request->poster,
            'content' => $request->content,
            'user_id' => Auth::id(),
        ]);

        return redirect("/");
    }

    public function getCreate(){
        return view('category/create');
    }

}

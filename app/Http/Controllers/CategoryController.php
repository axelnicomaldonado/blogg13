<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

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
        $post = Post::with('user')->findOrFail($id);
        return view('category/show', compact('post'));
    }

    public function getEdit($id){
        $categories = Category::all();
        $post = Post::find($id);
        return view('category/edit', [
            "post" => $post,
            "categories" => $categories
        ]);
    }
    
    public function update(Request $request, $id)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'poster' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'content' => 'required|string',
        'category_id' => 'required|integer',
    ]);

    $post = Post::findOrFail($id);

    if ($request->file('poster')) {
        // Elimina la imagen anterior si existe
        if ($post->poster && file_exists(storage_path('app/public/imagenes/posts/' . $post->poster))) {
            unlink(storage_path('app/public/imagenes/posts/' . $post->poster));
        }


        $filePath = $request->file('poster')->storeAs('imagenes/posts', $request->file('poster')->getClientOriginalName(), 'public');
        $post->poster = $request->file('poster')->getClientOriginalName();
    } else {
        // Mantén la imagen actual
        $post->poster = $request->input('current_poster');
    }

    // Actualiza otros campos
    $post->title = $request->title;
    $post->content = $request->content;
    $post->category_id = $request->category_id;
    $post->save();

    return redirect()->back()->with('success', 'Post actualizado con éxito.');
}

    public function store(Request $request){

        if ($request->hasFile('poster')) {
            $file = $request->file('poster');
            $destinationPath = public_path('/storage/imagenes/posts');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move($destinationPath, $filename);

        Post::create([
            'title' => $request->input('title'),
            'poster' => $filename,
            'content' => $request->input('content'),
            'user_id' => Auth::id(),
            'category_id' => $request->input('category_id'),
        ]);

        return redirect("/")->with('success', 'Artículo creado con éxito.');
    } else {
        return redirect()->back()->with('error', 'No se pudo cargar la imagen.');
    }
    }

    public function getCreate(){
        $categories = Category::all();
        return view('category/create', [
            "categories" => $categories
        ]);
    }

}

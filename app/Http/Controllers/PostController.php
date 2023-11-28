<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Categoria;
use App\Models\Comentario;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        $categorias = Categoria::all();
        return view('Posts.admPost', compact('posts','categorias'));
    }
   
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $titulo = $request->input('titulo');
        $descripcion = $request->input('descripcion');
        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $nombre_imagen = time() . '_' . $imagen->getClientOriginalName();
            $ruta = $imagen->storeAs('public/img', $nombre_imagen);
        }
        $post = new Post();
        $post->titulo = $titulo;
        $post->descripcion = $descripcion;
        $post->image_path = $nombre_imagen; 
        $post->save();
        
        return redirect(route('posts.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        $post->load('comentarios.user');
        $post->load('comentarios');
        $categorias = Categoria::all();
        return view('Posts.show', compact('post','categorias'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $categorias = Categoria::all();
        return view('Posts.edit', compact('post','categorias'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        $post->update($request->all());
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        if ($post->image_path) {
            Storage::disk('public')->delete($post->image_path);
        }
        $post->delete();
        return redirect()->route('posts.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Support\Facades\Storage;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('Posts.admPost', compact('posts'));
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
        $data = $request->all();
        // logica para la carga de imagen 
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('post_images', 'public');
            $data['image_path'] = $imagePath;
        }
        Post::create($data);
        return redirect(route('posts.index'));
       /* Post::create($request->all());
        return redirect(route('posts.index'));*/

        // logica para la carga de imagen 
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('Posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('Posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        $data = $request->all();
        
        // logica para la nueva imagen
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('post_images', 'public');
            $data['image_path'] = $imagePath;

            // Eliminar la imagen anterior si existe
            if ($post->image_path) {
                // Asegúrarse de que sea eliminada la foto anteior 
                Storage::disk('public')->delete($post->image_path);
            }
        }
        $post->update($data);
        return redirect()->route('posts.index');
       /* $post->update($request->all());
        return redirect()->route('posts.index');*/
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        // elminar iamgen asociada antes de eliminar el post
        if ($post->image_path) {
            Storage::disk('public')->delete($post->image_path);
        }

        $post->delete();
        return redirect()->route('posts.index');
    }
}

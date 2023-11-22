<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ArticulosController extends Controller
{
    public function index() {
        $posteos = Post::all();
        return view('articulos', compact('posteos'));
    }
}

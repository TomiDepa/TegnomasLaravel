@extends('layouts.app')

@section('content')
<main class="backgroundDegrade articulo">
    <section class="p-3">
    <form action="{{ route('posts.update', $post) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Titulo:</label>
            <input type="text" name="titulo" value="{{ $post->titulo }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion" class="form-control">{{ $post->descripcion }}</textarea>
        </div>
        <div>
            <label for="">Imagen cargada:</label>
            <img src="{{ asset('storage/img/' . $post->image_path) }}" alt="Imagen del post" width="100px" height="auto">  
        </div>
        <div>
            <label for="imagen">Imagen nueva:</label>
            <input type="file" name="imagen">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar Artículo</button>
    </form>
    </section>
</main>
@include('footer')

@endsection
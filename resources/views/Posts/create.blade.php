@extends('layouts.app')

@section('content')
<main class="backgroundDegrade articulo">
    <section class="p-3">
        <h1>Crear Artículo</h1>

        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="titulo">Titulo:</label>
                <input type="text" name="titulo" class="form-control">
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <textarea name="descripcion" class="form-control"></textarea>
            </div>
            <div>
                <label for="imagen">Imagen:</label>
                <input type="file" name="imagen">
            </div>
            <button type="submit" class="btn btn-primary">Crear Post</button>
        </form>
    </section>
</main>
@include('footer')

@endsection
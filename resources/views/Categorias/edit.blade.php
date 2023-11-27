@extends('layouts.app')

@section('content')
<main class="backgroundDegrade articulo">
    <section class="p-3">
    <form action="{{ route('categorias.update', $categoria) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" value="{{ $categoria->nombre }}" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar Categoria</button>
    </form>
    </section>
</main>
@include('footer')

@endsection
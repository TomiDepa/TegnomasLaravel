@extends('layouts.app')

@section('content')
<main class="backgroundDegrade articulo">
    <section class="p-3">
        <h1>Crear Categoria</h1>

        <form action="{{ route('categorias.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Crear Categoria</button>
        </form>
    </section>
</main>
@include('footer')

@endsection
@extends('layouts.app')

@section('content')
<main class="backgroundDegrade articulo">
    <section class="p-3">
        <h1>Crear Rol</h1>

        <form action="{{ route('rols.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" class="form-control">
            </div>
            <div class="form-group">
                <label for="id_rol">Permiso:</label>
                <select name="id_rol" id="id_rol" class="form-control">
                    <option value="">Seleccionar permiso</option>
                    @foreach($permisos as $permiso)
                    <option value="{{ $permiso->id_permiso }}">{{ $permiso->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Crear Rol</button>
        </form>
    </section>
</main>
@include('footer')

@endsection
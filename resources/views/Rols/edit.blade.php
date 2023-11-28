@extends('layouts.app')

@section('content')
<main class="backgroundDegrade articulo">
    <section class="p-3">
        <h1>Editar Rol</h1>

        <form action="{{ route('rols.update', $rol)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" value="{{ $rol->nombre }}" class="form-control">
            </div>
            <div class="form-group">
                <label for="id_rol">Permiso:</label>
                <select name="id_rol" id="id_rol" class="form-control">
                <option value="">Seleccione Permiso</option>
                @foreach($permisos as $permiso)
                    <option value="{{ $permiso->id_permiso }}">{{ $permiso->nombre }}</option>
                @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar Rol</button>
        </form>
    </section>
</main>
@include('footer')

@endsection
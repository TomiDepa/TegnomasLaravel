@extends('layouts.app')

@section('content')
<main class="backgroundDegrade">
    <section class="p-3">
        <h1>Crear Usuario</h1>

        <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Correo:</label>
                <input type="text" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="text" name="password" class="form-control">
            </div>
            <div class="form-group">
                <label for="id_rol">Rol:</label>
                <select name="id_rol" id="id_rol" class="form-control">
                    <option value="">Seleccionar Rol</option>
                    @foreach($rols as $rol)
                    <option value="{{ $rol->id_rol }}">{{ $rol->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Crear Usuario</button>
        </form>
    </section>
</main>
@include('footer')

@endsection
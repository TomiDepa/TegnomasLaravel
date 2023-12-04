@extends('layouts.app')

@section('content')
<main class="backgroundDegrade articulo">
    <section class="p-3">
    <form action="{{ route('users.update', $user) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" name="name" value="{{ $user->name }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" name="email" value="{{ $user->email }}" class="form-control">
        </div>
        @rol('Admin')
        <div class="form-group">
            <label for="id_rol">Rol:</label>
            <select name="id_rol" id="id_rol" class="form-control">
            <option value="{{ $user->id_rol }}">Seleccionar Rol</option>
            @foreach($rols as $rol)
                <option value="{{ $rol->id_rol }}">{{ $rol->nombre }}</option>
            @endforeach
        </select>
        </div>
        @endrol
        <button type="submit" class="btn btn-primary">Actualizar Usuario</button>
    </form>
    </section>
</main>
@include('footer')

@endsection
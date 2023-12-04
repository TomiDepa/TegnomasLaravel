@extends('layouts.app')

@section('content')
<main class="backgroundSolido">
    <section class="EncabezadoAdm">
        <img src="{{ asset('img/database.png') }}" alt="Database" class="img-fluid">
        <div>
            <h1>Administración Usuarios</h1>
        </div>
    </section>
    <section>
        <div class="admBotones">
            <a href="{{ route('users.create')}}"><button class="boton">Crear</button></a>
        </div>
        <div class="tabla2">
            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Rol</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @foreach($rols as $rol)
                                @if($user->id_rol == $rol->id_rol)
                                    @php
                                        $nombreRol = $rol->nombre;
                                        break;
                                    @endphp
                                @endif
                            @endforeach
                            {{ $nombreRol }}
                        </td>
                        <td>
                            <a href="{{ route('users.edit', $user) }}" class="boton">Editar</a>
                            <form action="{{ route('users.destroy', $user) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="boton" onclick="return confirm('¿Seguro qué quieres eliminarlo?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</main>
@include('footer')

@endsection
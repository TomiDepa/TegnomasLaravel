@extends('layouts.app')

@section('content')
<main class="backgroundSolido">
    <section class="encabezadoAdm">
        <img src="{{ asset('img/database.png') }}" alt="Database" class="img-fluid">
        <div>
            <h1>Administración Rols</h1>
        </div>
    </section>
    <section>
        <div class="admBotones">
            <a href="{{ route('rols.create')}}"><button class="boton">Crear</button></a>
        </div>
        <div class="tabla">
            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Permiso</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($rols as $rol) 
                        <tr>
                            <td>{{ $rol->nombre }}</td>
                            <td>
                                @foreach($permisos as $permiso)
                                    @if($rol->id_permiso == $permiso->id)
                                        @php
                                            $nombrePermiso = $permiso->nombre;
                                            break;
                                        @endphp
                                    @endif
                                @endforeach
                                {{ $nombrePermiso }}
                            </td>
                            <td>
                                <a href="{{ route('rols.edit', $rol->id_rol) }}" class="boton">Editar</a>

                                <form action="{{ route('rols.destroy', $rol->id_rol) }}" method="POST">
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
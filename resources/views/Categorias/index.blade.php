@extends('layouts.app')

@section('content')
<main class="backgroundSolido">
    <section class="encabezadoAdm">
        <img src="{{ asset('img/database.png') }}" alt="Database" class="img-fluid">
        <div>
            <h1>Administración Categoria</h1>
        </div>
    </section>
    <section >
        <div class="admBotones">
            <a href="{{ route('categorias.create')}}"><button class="boton">Crear</button></a>
        </div>
        <div class="tabla">
            <table >
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categorias as $categoria)
                    <tr>
                        <td>{{ $categoria->id }}</td>
                        <td>{{ $categoria->nombre }}</td>
                        <td>
                            <a href="{{ route('categorias.edit', $categoria) }}" class="boton">Editar</a>
                            <form action="{{ route('categorias.destroy', $categoria) }}" method="POST">
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
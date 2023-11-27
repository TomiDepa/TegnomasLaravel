@extends('layouts.app')

@section('content')
<main class="backgroundSolido">
    <section class="encabezadoAdm">
        <img src="{{ asset('img/database.png') }}" alt="Database" class="img-fluid">
        <div>
            <h1>Administración Post</h1>
        </div>
    </section>
    <section >
        <div class="admBotones">
            <a href="{{ route('posts.create')}}"><button class="boton">Crear</button></a>
        </div>
        <div class="tabla">
            <table >
                <thead>
                    <tr>
                        <th>Titulo</th>
                        <th>Descrpcion</th>
                        <th>Categoria</th>
                        <th>Imagen</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->titulo }}</td>
                        <td>{{ $post->descripcion }}</td>
                        <td>
                        @foreach($categorias as $categoria)
                                @if($post->id_categoria == $categoria->id)
                                    @php
                                        $nombreCategorias = $categoria->nombre;
                                        break;
                                    @endphp
                                @endif
                            @endforeach
                            {{ $nombreCategorias }}
                        </td>
                        <td>{{ $post->image_path }}</td>
                        <td>
                            <a href="{{ route('posts.show', $post) }}" class="boton">Ver</a>
                            <a href="{{ route('posts.edit', $post) }}" class="boton">Editar</a>
                            <form action="{{ route('posts.destroy', $post) }}" method="POST">
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
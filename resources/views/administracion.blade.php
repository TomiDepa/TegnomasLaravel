@extends('layouts.app')

@section('content')
<main class="backgroundSolido">
    <section class="admImg">
        <img src="{{ asset('img/database.png') }}" alt="Database" class="img-fluid">
    </section>
    <section class="admText">
        <p>
            Bienvenido al administrador del sitio TECGNOMAS. Desde acá podrás administrar la base de datos de tus productos y usuarios. Podrás agregar, modificar, borrar, o asignar roles desde aquí.
        </p>
        <div class="admBotones">
            <a href="/posts" class="boton">POST</a>
            <a href="/categorias" class="boton">CATEGORIAS</a>
            @rol('Admin')
            <a href="/rols" class="boton">ROLES</a>
            <a href="/users" class="boton">USUARIOS</a>     
            @endrol
        </div>
    </section>
</main>
@include('footer')

@endsection
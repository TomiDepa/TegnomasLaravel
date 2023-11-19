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
            <button class="boton">Modificar</button>
            <button class="boton">Borrar</button>
            <button class="boton">Agregar</button>
            <button class="boton">Admin</button>
        </div>
        <div class="tabla">
            <table>
                <tr>
                    <th>Accion</th>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Contenido</th>
                    <th>Fecha</th>
                    <th>Autor</th>
                </tr>
                <tr>
                    <th><input type="checkbox"></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                <tr>
                    <th><input type="checkbox"></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                <tr>
                    <th><input type="checkbox"></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </table>
        </div>
    </section>
</main>
@include('footer')

@endsection
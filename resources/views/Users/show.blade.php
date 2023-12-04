@extends('layouts.app')
@section('content')

<main class="backgroundDegrade">
    <section class="perfil">
        <h1 class="">Perfil</h1>
        <div class="cointainer text-center pt-4">
            <div class="row">
                <div class="col">
                    <p class="fs-5">Usuario</p>
                    <p class="fs-2">{{ Auth::user()->name }}</p>
                </div>
                <div class="col">
                    <p class="fs-5">Correo</p>
                    <p class="fs-2">{{ Auth::user()->email }}</p>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col">
                    <a href="{{ route('users.edit', ['user' => auth()->user()->id]) }}" class="boton">Editar</a>
                </div>
            </div>
        </div>
    </section>
</main>

@include('footer')
@endsection
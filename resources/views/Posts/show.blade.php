@extends('layouts.app')

@section('content')
<main class="backgroundDegrade articulo">
    <section class="p-3">
        <div class="contenedor-imagen">
            <img src="../img/Large_budget_1.jpg" class="img-fluid" alt="Asus 300">
        </div>
        <div>
            <h2>{{ $post->titulo }}</h2>
            <p>{{ $post->descripcion }}</p>
        </div>
    </section>
    <section class="p-3">
        <div class="d-flex justify-content-between tm-pt-45">
            <span class="tm-color-primary">Computadoras. Reseñas. Gama Alta</span>
            <span class="tm-color-primary">Septiembre 23, 2023</span>
        </div>
        <hr>
        <div class="d-flex justify-content-between">
            <span>1 comentario</span>
            <span>by Admin Tomás</span>
        </div>
        <div class="caja-comentarios">
            <div class="hacer-comentario">
                <h4>Deja tu comentario</h4>
                <form action="#">
                    <div>
                        <textarea name="comentario" id="comentario" cols="45" rows="3"></textarea>
                    </div>
                    <div>
                        <input type="submit" class="boton">
                    </div>
                </form>
            </div>
            <div class="comentarios">
                <h4>Comentarios</h4>
                <ol>
                    <li>
                        <div class="row fondo-comentarios">
                            <div class="col-2">
                                <span>Fulanito</span>
                            </div>
                            <div class="linea-vertical col-1"></div>
                            <div class="col-4">
                                <p>Esta muy buena!!</p>
                            </div>
                            <div class="col-lg-5 text-sm-center">
                                <div class="botones-comentarios">
                                    <div>
                                        <button class="boton"><img src="../img/me-gusta.png" alt="Me gusta"></button>
                                        <button class="boton"><img src="../img/no-me-gusta.png" alt="Me gusta"></button>
                                    </div>
                                    <div>
                                        <button class="boton">Responder</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ol>
            </div>
        </div>
    </section>
</main>

@include('footer')

@endsection
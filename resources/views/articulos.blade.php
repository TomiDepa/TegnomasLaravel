@extends('layouts.app')
@section('content')
<main class="tm-main backgroundDegrade container-fluid">
    <div class="row row-cols-1 row-cols-md-3 g-4 caja-articulos p-3">
        @foreach($posteos as $post)
            <div class="col">
                <div class="card text-bg-success">
                    <img src="" class="card-img-top" alt="Asus 300">
                    <div class="card-body">
                        <span class="position-relative top-0 start-0 tm-new-badge">Nuevo</span>
                        <h5 class="card-title">{{ $post->titulo }}</h5>
                        <p class="card-text">{{ $post->descripcion }}<a href="{{ route('posts.show', ['post' => $post->id]) }}">Ver más</a></p>
                        
                        <div class="d-flex justify-content-between tm-pt-45">
                            <!--<span class="tm-color-primary">categoria</span>
                            <span class="tm-color-primary">{{ $post->update_at }}</span>!-->
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <span>36 comments</span>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</main>
@include('footer')
@endsection
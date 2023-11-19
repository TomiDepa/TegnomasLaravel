
@extends('layouts.app')

@section('content')
<main class="backgroundDegrade">
    <section>
        <div class="encabezadoImg">
            <img src="{{ asset('img/laptop.png') }}" alt="Laptop" class="img-fluid">
            <div class="textEncabezado">
                <!--<h1>Laptops</h1>-->
            </div>
        </div>
    </section>
    <section class="infoIndex">
        <section class="descrIndex">
            <p>
                La tecnología nos encanta porque nos facilita la vida, nos entretiene y nos conecta con los demás. Los productos tecnológicos nos permiten realizar tareas de forma más rápida y eficiente, acceder a información y entretenimiento de forma ilimitada, y mantenernos en contacto con las personas que nos importan.
            </p>
            <a href="nosotros.php" class="boton">LEER MAS</a>
        </section>
        <section class="imgIndex">
            <a href="productos.php"><img src="{{ asset('img/celu.png') }}" alt="Iphone 14 Pro Max" class="img-fluid"></a>
            <a href="producyos.php"><img src="{{ asset('img/auris.png') }}" alt="Auriculares" class="img-fluid"></a>
            <a href="productos.php"><img src="{{ asset('img/mando.png') }}" alt="Mando Xbox" class="img-fluid"></a>
        </section>
    </section>
</main>

@include('footer')

@endsection
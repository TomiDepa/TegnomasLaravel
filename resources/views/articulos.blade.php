@extends('layouts.app')
@section('content')
<main class="tm-main backgroundDegrade container-fluid">
    <div class="row row-cols-1 row-cols-md-3 g-4 caja-articulos p-3">
        <div class="col">
            <div class="card text-bg-success">
                <img src="img/Large_budget_1.jpg" class="card-img-top" alt="Asus 300">
                <div class="card-body">
                    <span class="position-relative top-0 start-0 tm-new-badge">Nuevo</span>
                    <h5 class="card-title">Rápida, economica, y confiable, la Asus 300 esta aqui para quedarse</h5>
                    <p class="card-text">El chasis se ha rediseñado para 2023 y ahora es un 4,5% más pequeño que el diseño anterior...<a href="pagArticulos/articulo1.php">Ver más</a></p>
                    
                    <div class="d-flex justify-content-between tm-pt-45">
                        <span class="tm-color-primary">Computadoras. Reseñas. Gama Alta</span>
                        <span class="tm-color-primary">Septiembre 23, 2023</span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <span>36 comments</span>
                        <span>by Admin Tomás</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-bg-success">
                <img src="img/Large_budget_2.jpg" class="card-img-top" alt="Asus Tuf Gaming">
                <div class="card-body">
                    <span class="position-relative top-0 start-0 tm-new-badge">Nuevo</span>
                    <h5 class="card-title">Conoce la laptop que es usada oficialmente por los cuerpos de Marines desplegados</h5>
                    <p class="card-text">La ASUS TUF Gaming es la computadora portátil con durabilidad de grado militar estadounidense más estrictamente probada del mundo</p>
                    <div class="d-flex justify-content-between tm-pt-45">
                        <span class="tm-color-primary">Computadoras. Reseñas. Gama Alta</span>
                        <span class="tm-color-primary">Septiembre 20, 2023</span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <span>48 comments</span>
                        <span>by Admin Jogher</span>
                    </div>
                </div> 
            </div>
        </div>
        <div class="col">
            <div class="card text-bg-success">
                <img src="img/Low_budget_1.jpg" class="card-img-top" alt="Acer Aspire 3">
                <div class="card-body">
                    <h5 class="card-title">La Acer Aspire 3, lo mejor que tiene Asus por menos de 300 USD</h5>
                    <p class="card-text">El portátil Aspire 3 (A315-24P; 399 $) de Acer ha avanzado casi sin cambios a lo largo de varias generaciones de hardware , pero eso no es necesariamente malo.... <!-- Se trata de un portátil económico, sencillo y eficaz, con un precio inicial bajo. En este nivel de presupuesto, la prioridad es simplemente conseguir una máquina que funcione. El Acer Aspire 3 cumple ese requisito, aunque no tenga mucho margen de maniobra: Hay portátiles más capaces justo por encima de él en precio, como el Lenovo IdeaPad Flex 5i y el Dell Inspiron 15 (3525), que están a la venta intermitentemente por 500 dólares.!--></p>
                    <div class="d-flex justify-content-between tm-pt-45">
                        <span class="tm-color-primary">Computadoras. Reseñas. Gama Baja</span>
                        <span class="tm-color-primary">June 11, 2020</span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <span>24 comments</span>
                        <span>by Admin Isaac</span>
                    </div>
                    </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-bg-success">
                <img src="img/High_budget_headphones.jpg" class="card-img-top" alt="Focal Bathys">
                <div class="card-body">
                    <span class="position-relative top-0 start-0 tm-new-badge">Nuevo</span>
                    <h5 class="card-title">La caja de sorpresas que cambiará tu forma de escuchar música</h5>
                    <p class="card-text"> Los Focal Bathys, con sus transductores franceses hechos a medida y sus cómodas almohadillas de cuero, son los mejores auriculares inalámbricos de gama alta que he escuchado hasta ahora...<!-- Su aspecto es fantástico, con logotipos luminosos en el exterior de cada casco, pero su sonido es aún mejor. El ADN de sus auriculares de gama alta se filtra en gran medida aquí. Estos auriculares con cancelación de ruido poseen una de las calidades de sonido más claras y divertidas que he escuchado hasta ahora.!--></p>
                    <div class="d-flex justify-content-between tm-pt-45">
                        <span class="tm-color-primary">Accesorios. Reseñas. Gama Alta</span>
                        <span class="tm-color-primary">Septiembre 17, 2023</span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <span>72 comments</span>
                        <span>by Autor Pedro</span>
                    </div>
                </div>
            </div>
        </div> 
</main>
@include('footer')
@endsection
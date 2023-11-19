<?php
require_once("header.php");
?>
<main class="backgroundDegrade">
    <section id="celulares">
        <div class="encabezadoImg">
            <img src="{{ asset('img/celulares.png') }}" alt="Celulares" class="img-fluid">
            <div class="textEncabezado">
                <h2>Celulares</h2>
            </div>
        </div>
    </section>
    <section class="contenedor">
        <div class="cajasProd">
            <div class="colText">
                <p>
                    El iPhone 15 Pro es el primer iPhone diseñado con titanio de calidad aeroespacial, la misma aleación que se usa en las naves espaciales enviadas a Marte.La cámara gran angular de 48 MP es más avanzada que nunca, y toma fotos en alta resolución con un increíble nivel de detalle y color. La diferencia saltará a la vista en tus retratos.
                </p>
            </div>
            <div class="colImg">
                <img src="img/Iphone15.png" alt="iPhone 15 Pro" class="img-fluid">
            </div>
        </div>
        <div class="cajasProd">
            <div class="colImg">
                <img src="img/Samsung.png" alt="Galaxy Z Fold5" class="img-fluid">
            </div>
            <div class="colText">
                <p>
                    El Galaxy Z Fold5 hace honor a su nombre al plegarse para cerrar, lo que hace que una pantalla enorme quepa en tu bolsillo desafiando a toda lógica. Abrilo, plegalo para cerrarlo o dejalo abierto en el ángulo perfecto.Con un enorme sistema de batería doble de 4400 mAh (típico). Junto con un procesador avanzado, ajusta de forma eficiente el uso de la energía a tus hábitos y necesidades, haciendo que una carga dure más que nunca.
                </p>
            </div>
        </div>
    </section>
    <section>
        <!--Otras categorias-->
    </section>
</main>
<?php
require_once("footer.php");
?>
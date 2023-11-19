<?php
require_once("header.php");
?>
<main>
    <div class="contenedorContacto">
        <section class="contacto">
            <h1>Contacto</h1>
            <h2>Completa el formulario y envianos un email</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta officia assumenda aut dicta delectus magnam doloribus esse! Assumenda ullam mollitia neque dolorum quod nulla nihil at architecto dolore, soluta facilis.
            </p>
        </section>
        <section class="formularios formContacto">
            <form action="formulario.php" method="post">
                <div>
                    <input type="text" id="nombre" name="nombre" required placeholder="Nombre y Apellido" class="ingresoDato">
                </div>
                <div>
                    <input type="email" id="correo" name="correo" required placeholder="Email" class="ingresoDato">
                </div>
                <div>
                    <input type="text" id="asunto" name="asunto" required placeholder="Asunto" class="ingresoDato">
                </div>
                <div>
                    <textarea name="" id="" cols="24" rows="5" placeholder="Mesaje" class="ingresoDato"></textarea>
                </div>
                <input type="submit" class="boton">
            </form>
        </section>
    </div>
    <section class="contactoAbajo">
        <div class="contactoAbajoCen">
            <h3>E-mail</h3>
            <p>info@tegnomas.com</p>
        </div>
    </section>
</main>
<?php
require_once("footer.php");
?>
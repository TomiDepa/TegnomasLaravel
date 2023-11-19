<?php
require_once("headerAdm.php");
?>
<main class="backgroundSolido">
    <section class="EncabezadoAdm">
        <img src="img/database.png" alt="Database" class="img-fluid">
        <div>
            <h1>Administración Usuarios</h1>
        </div>
    </section>
    <section>
        <div class="admBotones">
            <button class="boton">Modificar</button>
            <button class="boton">Borrar</button>
            <button class="boton">Agregar</button>
            <button class="boton">Admin</button>
        </div>
        <div>
            <table class="tabla2">
                <tr>
                    <th></th>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th>Contraseña</th>
                    <th>Rol</th>
                    <th>Fecha</th>
                </tr>
                <tr>
                    <th><input type="checkbox"></th>
                    <th></th>
                    <th></th>
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
                    <th></th>
                    <th></th>
                </tr>
            </table>
        </div>
    </section>
</main>
<?php
require_once("footer.php");
?>
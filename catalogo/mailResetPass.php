<?php
    require 'config/config.php';
    require 'funciones/conexion.php';
    require 'funciones/usuarios.php';
        mailResetPass();

    include 'layout/header.php';
    include 'layout/nav.php';
?>

    <main class="container py-4">
        <h1>Reseteo de contraseña</h1>

        <div class="alert bg-light p-4 m-3 col-8 mx-auto shadow">
            Aún falta un paso... <br>
            Chequeá tu email <?= $_POST['email'] ?> para
            modificar tu contraseña.
        </div>

    </main>

<?php
    include 'layout/footer.php';
?>
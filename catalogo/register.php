<?php
    //require 'config/config.php';
    require 'funciones/conexion.php';
    require 'funciones/usuarios.php';
    $checkInsert = registrar();
    $css = 'danger';
    $mensaje = 'No se pudo registrar el usuario.';
    if( $checkInsert ){
        $css = 'success';
        $mensaje = 'Usuario registrado correctamente.';
    }

    include 'layout/header.php';
    include 'layout/nav.php';
?>

    <main class="container py-4">
        <h1>Registro de un usuario</h1>

        <div class="alert bg-light text-<?= $css ?> p-4 col-8 mx-auto shadow">
            <?= $mensaje ?>
            <a href="adminUsuarios.php" class="btn btn-outline-secondary">
                Volver a panel de usuarios
            </a>
        </div>

    </main>

<?php
    include 'layout/footer.php';
?>
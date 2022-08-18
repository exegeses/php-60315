<?php
    require 'config/config.php';
    require 'funciones/autenticacion.php';
        autenticar();
    require 'funciones/conexion.php';
    require 'funciones/usuarios.php';
    $checkUpdate = modificarClave();
    $css = 'danger';
    $mensaje = 'No se pudo modificar la contraseña.';
    if( $checkUpdate ){
        $css = 'success';
        $mensaje = 'Contraseña modificada correctamente.';
    }

    include 'layout/header.php';
    include 'layout/nav.php';
?>

    <main class="container py-4">
        <h1>Modificación de contraseña</h1>

        <div class="alert bg-light text-<?= $css ?> p-4 col-8 mx-auto shadow">
            <?= $mensaje ?>
            <a href="admin.php" class="btn btn-outline-secondary">
                Volver a dashboard
            </a>
        </div>

    </main>

<?php
    include 'layout/footer.php';
?>
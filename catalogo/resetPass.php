<?php
    require 'config/config.php';
    require 'funciones/conexion.php';
    require 'funciones/usuarios.php';
    $checkUpdate = resetPass();
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
        <h1>Reseteo de contraseña</h1>

        <div class="alert bg-light text-<?= $css ?> p-4 col-8 mx-auto shadow">
            <?= $mensaje ?>
            <a href="formLogin.php" class="btn btn-outline-secondary">
                Ingresazr a sistema
            </a>
        </div>


    </main>

<?php
    include 'layout/footer.php';
?>
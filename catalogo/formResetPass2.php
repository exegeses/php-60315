<?php
    require 'config/config.php';
    require 'funciones/conexion.php';
    require 'funciones/usuarios.php';
    $checkCodigo = validarCodigoResetPass();
    include 'layout/header.php';
    include 'layout/nav.php';
?>

    <main class="container py-4">
        <h1>Cambio de contraseña</h1>

<?php
    if ( !$checkCodigo ){
?>
        <div class="alert alert-danger p-4 col-8 mx-auto shadow">
            El código, intente nuevamente
            <a class="btn btn-outline-secondary my-2 px-4 "
               href="formResetPass.php">
                Resetear clave.
            </a>
        </div>
<?php
    }
    else{
?>

        <div class="alert bg-light p-4 col-8 mx-auto shadow">
            <form action="resetPass.php" method="post">

                <label for="clave">Contraseña</label>
                <input type="password" name="clave"
                       class='form-control' id="clave" required>
                <br>
                <label for="clave2">Repite contraseña</label>
                <input type="password" name="clave2"
                       class='form-control' id="clave2" required>
                <br>
                <div class="d-flex justify-content-between">
                    <button class="btn btn-dark my-2 px-4">
                        Resetear contraseña
                    </button>

                </div>
            </form>
        </div>
<?php
    }
?>

    </main>

<?php
    include 'layout/footer.php';
?>
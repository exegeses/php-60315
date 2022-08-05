<?php
    require 'config/config.php';
    include 'layout/header.php';
    include 'layout/nav.php';
?>

    <main class="container">
        <h1>Ingreso a sistema</h1>

        <div class="alert bg-light p-4 col-8 mx-auto shadow">
            <form action="login.php" method="post">

                <label for="email">Usuario (email)</label>
                <input type="email" name="email"
                       class='form-control' id="email" required>
                <br>
                <label for="clave">Contraseña</label>
                <input type="password" name="clave"
                       class='form-control' id="clave" required>
                <br>
                <div class="d-flex justify-content-between">
                <button class="btn btn-dark my-2 px-4">
                    Ingresar
                </button>
                <a class="btn btn-outline-secondary my-2 px-4 " href="">
                    Resetear clave.
                </a>

                </div>
            </form>
        </div>

    <?php
        if( isset( $_GET['error'] ) ){
            //$mensaje = ( $_GET['error'] == 1 )?'Usuario y/o clave incorrectos.':'Debe loguearse para ingresar';
            $mensaje = match ( $_GET['error'] )
            {
                '1' => 'Usuario y/o clave incorrectos.',
                '2' => 'Debe loguearse para ingresar',
                default => 'No se cumplen los anteriores'
            }
    ?>
        <div class="alert alert-danger p-4 col-8 mx-auto text-danger shadow">
            <?= $mensaje; ?>
        </div>
    <?php
        }
    ?>

    </main>

<?php  include 'layout/footer.php';  ?>
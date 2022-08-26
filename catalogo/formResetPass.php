<?php
    require 'config/config.php';
    include 'layout/header.php';
    include 'layout/nav.php';
?>

    <main class="container py-4">
        <h1>Reseteo de contraseña</h1>

        <div class="alert bg-light p-4 m-3 col-8 mx-auto shadow">
            <form action="mailResetPass.php" method="post">

                <label for="email">Ingrese su email: </label>
                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <div class="input-group-text">@</div>
                    </div>
                    <input type="email" name="email"
                           class="form-control" id="email" required>
                </div>

                <button class="btn btn-dark my-3 px-4">Enviar</button>

            </form>
        </div>

<?php
        if ( isset( $_GET['error'] ) ){
?>
        <div class="alert alert-danger p-4 col-8 mx-auto text-danger shadow">
            Email incorrecto, intente nuevamente.
        </div>
<?php
        }
?>

    </main>

<?php
    include 'layout/footer.php';
?>
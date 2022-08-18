<?php
    require 'config/config.php';
    include 'layout/header.php';
    include 'layout/nav.php';
?>

    <main class="container">
        <h1>Cambio de contraseña</h1>


        <div class='alert bg-light p-4 col-8 mx-auto shadow'>
            <form action="modificarClave.php" method="post" class="validarForm">

                <div class='form-group mb-4 has-validation'>
                    <label for="clave">Contraseña actual</label>
                    <input type="password" name="clave"
                           class='form-control' id="clave">
                    <div class="text-danger fs-6" id="msjClave">
                        Debe completar el campo Contraseña actual
                    </div>
                </div>
                <div class='form-group mb-2'>
                    <label for="newClave">Nueva contraseña</label>
                    <input type="password" name="newClave"
                           class='form-control' id="newClave">
                    <div class="text-danger fs-6" id="msjNewClave">
                        Debe completar el campo Nueva contraseña
                    </div>
                </div>
                <div class='form-group mb-3'>
                    <label for="newClave2">Repita contraseña</label>
                    <input type="password" name="newClave2"
                           class='form-control' id="newClave2">
                    <div class="text-danger fs-6" id="msjNewClave2">
                        Debe completar el campo Repita contraseña con un valor igual a Nueva contraseña
                    </div>
                </div>

                <button class='btn btn-dark my-3 px-4'>Modificar contraseña</button>
                <a href="adminUsuarios.php" class='btn btn-outline-secondary'>
                    Volver a panel de usuarios
                </a>
            </form>

        </div>

        <?php
        if( isset( $_GET['error'] ) ){
            $mensaje = match ( $_GET['error'] )
            {
                '1' => 'Contraseña incorrecta.',
                '2' => 'Las credenciales no coinciden (nueva clave)',
                default => 'No se cumplen los anteriores'
            }
            ?>
            <div class="alert alert-danger p-4 col-8 mx-auto text-danger shadow">
                <?= $mensaje; ?>
            </div>
            <?php
        }
        ?>


        <script>
            const form = document.querySelector('.validarForm');
            const clave = document.querySelector('#clave');
            const newClave = document.querySelector('#newClave');
            const newClave2 = document.querySelector('#newClave2');
            const msjClave = document.querySelector('#msjClave');
                msjClave.style.display = 'none';
            const msjNewClave = document.querySelector('#msjNewClave');
                msjNewClave.style.display = 'none';
            const msjNewClave2 = document.querySelector('#msjNewClave2');
                msjNewClave2.style.display = 'none';

            form.addEventListener('submit', validarFormulario );
            function validarFormulario( evento) {
                let flag = true;
                evento.preventDefault();
                msjClave.style.display = 'none';
                if( checkVacio( clave ) ){
                    msjClave.style.display = 'block';
                    flag = false;
                }
                msjNewClave.style.display = 'none';
                if( checkVacio( newClave ) ){
                    msjNewClave.style.display = 'block';
                    flag = false;
                }
                msjNewClave2.style.display = 'none';
                if( checkVacio( newClave2 ) ){
                    msjNewClave2.style.display = 'block';
                    flag = false;
                }
                if( checkRepite() ){
                    msjNewClave2.style.display = 'block';
                    flag = false;
                }
                if( flag ){
                    form.submit();
                }

            }
            function checkVacio(campo)
            {
                if( campo.value == '' || campo.value == null ){
                    return true;
                }
                return false;
            }
            function checkRepite()
            {
                if( newClave.value != newClave2.value ){
                    //console.log('no coinciden');
                    return true;
                }
                return false;
            }

        </script>

    </main>

<?php  include 'layout/footer.php';  ?>
<?php
    //require 'config/config.php';
    require 'funciones/conexion.php';
    require 'funciones/marcas.php';
    $marca = verMarcaPorID( $_GET['idMarca'] );
    include 'layout/header.php';
    include 'layout/nav.php';
?>

    <main class="container">
        <h1>Modificación de una marca</h1>

        <div class="alert bg-light p-4 col-8 mx-auto shadow">
            <form action="modificarMarca.php" method="post">
                <div class="form-group">
                    <label for="mkNombre">Nombre de la Marca</label>
                    <input type="text" name="mkNombre"
                           value="<?= $marca['mkNombre'] ?>"
                           class="form-control" id="mkNombre" required>
                    <input type="hidden" name="idMarca" 
                           value="<?= $marca['idMarca'] ?>">
                </div>

                <button class="btn btn-dark my-3 px-4">Modificar marca</button>
                <a href="adminMarcas.php" class="btn btn-outline-secondary">
                    Volver a panel de marcas
                </a>
            </form>
        </div>

    </main>

<?php  include 'layout/footer.php';  ?>
<?php
    //require 'config/config.php';
    require 'funciones/conexion.php';
    require 'funciones/marcas.php';
        $existe = isAnyProd();
    include 'layout/header.php';
    include 'layout/nav.php';
?>

    <main class="container py-4">
        <h1>Baja de una marca</h1>

<?php
        if( $existe ){  
?>
        <div class="alert alert-danger col-6 mx-auto">
            <i class="bi bi-exclamation-triangle"></i>
            No se puede eliminar la marca ya que tiene productos relacionados
            <br>
            <a href="adminMarcas.php" class="btn btn-light mt-3">
                Volver a panel de marcas
            </a>
        </div>
<?php
        }
        else{
            $marca = verMarcaPorID( $_GET['idMarca'] );
?>
        <div class="alert bg-light p-4 col-6 mx-auto shadow text-danger">
            Se eliminará la marca:
            <span class="lead"><?= $marca['mkNombre'] ?></span>
            <form action="eliminarMarca.php" method="post">
                <input type="hidden" name="idMarca"
                       value="<?= $marca['idMarca'] ?>">
                <button class="btn btn-danger my-3 px-4">Confirmar baja</button>
                <a href="adminMarcas.php" class="btn btn-outline-secondary">
                    Volver a panel de marcas
                </a>
            </form>
        </div>
        <script>
            Swal.fire(
                '¡Advertencia!',
                'Si pulsa el botón "Confirmar baja", se eliminará la marca.',
                'warning'
            );
        </script>
<?php
        }
?>

    </main>

<?php  include 'layout/footer.php';  ?>
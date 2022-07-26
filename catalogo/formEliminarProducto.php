<?php
//require 'config/config.php';
    require 'funciones/conexion.php';
    require 'funciones/productos.php';
    $producto = verProductoPorID();
	include 'layout/header.php';
	include 'layout/nav.php';
?>

    <main class="container">
        <h1>Baja de un producto</h1>

        <article class="card border-danger py-3 col-6 mx-auto">
            <div class="row">
                <div class="col">
                    <img src="productos/<?= $producto['prdImagen'] ?>" class="img-thumbnail">
                </div>
                <div class="col text-danger">
                    <h2><?= $producto['prdNombre'] ?></h2>
                    <?= $producto['mkNombre'] ?> | <?= $producto['catNombre'] ?>
                    <br>
                    $<?= $producto['prdPrecio'] ?>
                    <br>
                    <?= $producto['prdDescripcion'] ?>

                    <form action="eliminarProducto.php" method="post">
                        <input type="hidden" name="idProducto"
                               value="<?= $producto['idProducto'] ?>">
                        <button class="btn btn-danger btn-block my-3">
                            Confirmar baja
                        </button>
                        <a href="adminProductos.php" class="btn btn-outline-secondary btn-block">
                            Volver a panel
                        </a>

                    </form>
                    
                </div>
            </div>
        </article>

        <script>
           Swal.fire(
                'Advertencia',
                'Si pulsa el botón "Confirmar baja", se eliminará el producto.',
                'warning'
            )
        </script>

    </main>

<?php  include 'layout/footer.php';  ?>
<?php
//require 'config/config.php';
	include 'layout/header.php';
	include 'layout/nav.php';
?>

    <main class="container">
        <h1>Baja de un producto</h1>

        <article class="card border-danger py-3 col-6 mx-auto">
            <div class="row">
                <div class="col">
                    <img src="productos/<?= 'prdImagen' ?>" class="img-thumbnail">
                </div>
                <div class="col text-danger">
                    <h2><?= 'prdNombre' ?></h2>
                    <?= 'mkNombre' ?> | <?= 'catNombre' ?>
                    <br>
                    $<?= 'prdPrecio' ?>
                    <br>
                    <?= 'prdPresentacion' ?>

                    <form action="eliminarProducto.php" method="post">
                        <input type="hidden" name="idProducto"
                               value="<?= 'idProducto' ?>">
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
           /* Swal.fire(
                'Advertencia',
                'Si pulsa el botón "Confirmar baja", se eliminará el producto.',
                'warning'
            )*/
        </script>

    </main>

<?php  include 'layout/footer.php';  ?>
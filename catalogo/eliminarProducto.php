<?php
    //require 'config/config.php';
    require 'funciones/conexion.php';
    require 'funciones/productos.php';
    $checkDelete = eliminarProducto( $_POST['idProducto'] );
    $css = 'danger';
    $mensaje = 'No se pudo eliminar el producto.';
    if( $checkDelete ){
        $css = 'success';
        $mensaje = 'Producto eliminado correctamente.';
    }

    include 'layout/header.php';
    include 'layout/nav.php';
?>

    <main class="container py-4">
        <h1>Baja de un producto</h1>

        <div class="alert bg-light text-<?= $css ?> p-4 col-8 mx-auto shadow">
            <?= $mensaje ?>
            <a href="adminProductos.php" class="btn btn-outline-secondary">
                Volver a panel de productos
            </a>
        </div>

    </main>

<?php
    include 'layout/footer.php';
?>
<?php
    require 'config/config.php';
    require 'funciones/autenticacion.php';
        autenticar();
    require 'funciones/conexion.php';
    require 'funciones/productos.php';
    $checkInsert = agregarProducto();
    $css = 'danger';
    $mensaje = 'No se pudo agregar el producto.';
    if( $checkInsert ){
        $css = 'success';
        $mensaje = 'Producto agregado correctamente.';
    }

    include 'layout/header.php';
    include 'layout/nav.php';
?>

    <main class="container py-4">
        <h1>Alta de un producto</h1>

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
<?php
//require 'config/config.php';
    require 'funciones/conexion.php';
    require 'funciones/productos.php';
    $productos = listarProductos();
    include 'layout/header.php';
    include 'layout/nav.php';
?>

    <main class="container py-4">
        <h1>Catálogo de productos</h1>
        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-4 py-5">

<?php
        while( $producto = mysqli_fetch_assoc( $productos ) )
        {
?>
            <article class="col d-flex align-items-start">
                <div class="m-1 producto">
                    <img src="productos/<?= $producto['prdImagen'] ?>">
                    <h2><?= $producto['prdNombre'] ?></h2>
                    <span class="precio">$<?= $producto['prdPrecio'] ?></span>
                    <p>
                        Marca: <?= $producto['mkNombre'] ?> <br>
                        Categoría: <?= $producto['catNombre'] ?> <br>
                    </p>
                </div>
            </article>
<?php
        }
?>
        </div>
        
    </main>

<?php
    include 'layout/footer.php';
?>
<?php
require 'conexion.php';
require 'productos.php';
$productos = listarProductos();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listador de Marcas</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <header class="p-4 bg-info">
        <nav class="container">Menu </nav>

    </header>
    <main class="container p-3">

        <h1>Listado de Productos detallados</h1>
        <dl class="col-4">
            <?php
                while ( $producto = mysqli_fetch_assoc( $productos )) { //Abrimos el while
            ?>
            
            <dt><?= 'Nombre: ', $producto['prdNombre'] ?></dt>
            <dd><?= 'Categoría: ', $producto['catNombre'] ?></dd>
            <dd><?= 'Marca: ', $producto['mkNombre'] ?></dd>
            <dd><?= 'Precio: $', $producto['prdPrecio'] ?></dd>
            <dd><?= 'Descripción: ', $producto['prdDescripcion'] ?></dd>
            <br>
            <?php
                } // Cerramos el while
            ?>
        </dl>

    </main>
    <footer class="fixed-bottom bg-light text center p-4">
        leyenda de pie de pagina
    </footer>
</body>

</html>
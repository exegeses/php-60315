<?php

    //require 'config/config.php';
    require 'funciones/conexion.php';
    require 'funciones/productos.php';
    $productos = listarProductos();
	include 'layout/header.php';
	include 'layout/nav.php';
?>

    <main class="container">
        <h1>Panel de administración de productos</h1>

        <form action="adminProductos.php" method="get">
        <table class="table table-borderless">
            <tr>
            <td>
                <a href="admin.php" class="btn btn-outline-secondary my-2">
                    Volver a dashboard
                </a>
            </td>
            <td>
                <input type="text" name="buscar" class="form-control">
            </td>
            <td><button class="btn btn-dark">buscar</button></td>
            </tr>
        </table>
        </form>

        <table class="table table-borderless table-striped table-hover">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Marca</th>
                    <th>Categoria</th>
                    <th>Descripción</th>
                    <th>Imagen</th>
                    <th colspan="2">
                        <a href="formAgregarProducto.php" class="btn btn-outline-secondary">
                            Agregar
                        </a>
                    </th>
                </tr>
            </thead>
            <tbody>
<?php
        while ( $producto = mysqli_fetch_assoc($productos) ){
?>            
                <tr>
                    <td><?= $producto['prdNombre'] ?></td>
                    <td><span class="precio3">$<?= $producto['prdPrecio'] ?></span></td>
                    <td><?= $producto['mkNombre'] ?></td>
                    <td><?= $producto['catNombre'] ?></td>
                    <td><?= $producto['prdDescripcion'] ?></td>
                    <td><img src="productos/<?= $producto['prdImagen'] ?>" class="img-thumbnail"></td>
                    <td>
                        <a href="formModificarProducto.php?idProducto=<?= $producto['idProducto'] ?>" class="btn btn-outline-secondary">
                            Modificar
                        </a>
                    </td>
                    <td>
                        <a href="formEliminarProducto.php?idProducto=<?= $producto['idProducto'] ?>" class="btn btn-outline-secondary">
                            Eliminar
                        </a>
                    </td>
                </tr>
<?php
        }
?>
            </tbody>
        </table>

        <a href="admin.php" class="btn btn-outline-secondary my-2">
            Volver a dashboard
        </a>

    </main>

<?php  include 'layout/footer.php';  ?>
<?php
//require 'config/config.php';
    require 'funciones/conexion.php';
    require 'funciones/marcas.php';
    require 'funciones/categorias.php';
    require 'funciones/productos.php';
    $marcas = listarMarcas();
    $categorias = listarCategorias();
    $producto = verProductoPorID();
	include 'layout/header.php';
	include 'layout/nav.php';
?>

    <main class="container">

        <h1>Modificación de un producto</h1>

        <div class="alert bg-light p-4 col-8 mx-auto border shadow-sm">
            <form action="formModificarProducto.php" method="post" enctype="multipart/form-data">

                <div class="form-group mb-4">
                    <label for="prdNombre">Nombre del Producto</label>
                    <input type="text" name="prdNombre"
                           value="<?= $producto['prdNombre'] ?>"
                           class="form-control" id="prdNombre" required>
                </div>

                <label for="prdPrecio">Precio del Producto</label>
                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <div class="input-group-text">$</div>
                    </div>
                    <input type="number" name="prdPrecio"
                           value="<?= $producto['prdPrecio'] ?>"
                           class="form-control" id="prdPrecio" min="0" step="0.01" required>
                </div>

                <div class="form-group mb-4">
                    <label for="idMarca">Marca</label>
                    <select class="form-select" name="idMarca" id="idMarca" required>
                        <option value="">Seleccione una marca</option>
           <?php
                    while( $marca = mysqli_fetch_assoc( $marcas ) ){
           ?>
                        <option <?= ( $marca['idMarca'] == $producto['idMarca'] )? 'selected':'';  ?> value="<?= $marca['idMarca'] ?>"><?= $marca['mkNombre'] ?></option>
            <?php
                    }
            ?>
                    </select>
                </div>

                <div class="form-group mb-4">
                    <label for="idCategoria">Categoría</label>
                    <select class="form-select" name="idCategoria" id="idCategoria" required>
                        <option value="">Seleccione una categoría</option>
            <?php
                while( $categoria = mysqli_fetch_assoc($categorias) ){  
            ?>
                        <option <?= ( $categoria['idCategoria'] == $producto['idCategoria'] )?'selected':''; ?> value="<?= $categoria['idCategoria'] ?>"><?= $categoria['catNombre'] ?></option>
            <?php
                }
            ?>
                    </select>
                </div>

                <div class="form-group mb-4">
                    <label for="prdDescripcion">Descripción del Producto</label>
                    <textarea name="prdDescripcion" class="form-control"
                              id="prdDescripcion" required><?= $producto['prdDescripcion'] ?></textarea>
                </div>

                <div class="mb4">
                    <label>Imagen actual:</label>
                    <img src="productos/<?= $producto['prdImagen'] ?>" class="img-thumbnail">
                </div>

                <label class="mt-4">Modificar imagen (opcional)</label>
                <div class="custom-file mt-1 mb-4">
                    <input type="file" name="prdImagen"  class="custom-file-input" id="customFileLang" lang="es">
                    <label class="custom-file-label" for="customFileLang" data-browse="Buscar en disco">Seleccionar Archivo: </label>
                </div>

                <button class="btn btn-dark mr-3 px-4">Modificar producto</button>
                <a href="adminProductos.php" class="btn btn-outline-secondary">
                    Volver a panel de productos
                </a>

            </form>
        </div>
    </main>

<?php  include 'layout/footer.php';  ?>
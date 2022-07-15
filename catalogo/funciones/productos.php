<?php

### CRUD de productos  ###

function listarProductos() : mysqli_result | false
{
    $link = conectar();
    /*
    $sql = "SELECT
                    idProducto, prdNombre, prdPrecio,
                    marcas.idMarca, mkNombre,
                    categorias.idCategoria, catNombre,
                    prdDescripcion, prdImagen
            FROM productos, marcas, categorias
            WHERE productos.idMarca = marcas.idMarca
              AND productos.idCategoria = categorias.idCategoria;";*/
    $sql = "SELECT
                    idProducto, prdNombre, prdPrecio,
                    m.idMarca, mkNombre,
                    c.idCategoria, catNombre,
                    prdDescripcion, prdImagen
                FROM productos p
                    JOIN marcas m
                        ON p.idMarca = m.idMarca
                  JOIN categorias c
                        ON  p.idCategoria = c.idCategoria";
    try
    {
        $resultado = mysqli_query($link, $sql);
        return $resultado;
    }catch ( Exception $e )
    {
        echo $e->getMessage();
        return false;
    }
}

/*
 * listarProductos()
 * verProductoPorID()
 * agregarProducto()
 * modificarProducto()
 * eliminarProducto()
 * */
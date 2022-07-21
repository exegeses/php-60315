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

    //$buscar = ( isset($_GET['buscar']) )? $_GET['buscar'] :  '';
    $buscar = $_GET['buscar'] ?? '';

    $sql = "SELECT
                    idProducto, prdNombre, prdPrecio,
                    m.idMarca, mkNombre,
                    c.idCategoria, catNombre,
                    prdDescripcion, prdImagen
                FROM productos p
                    JOIN marcas m
                        ON p.idMarca = m.idMarca
                  JOIN categorias c
                        ON  p.idCategoria = c.idCategoria
                WHERE prdNombre LIKE '%".$buscar."%'";
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

function subirImagen()
{
    //si no enviaron archivo
    $prdImagen = 'noDisponible.png';

    //si enviaron archivo
    if( $_FILES['prdImagen']['error'] == 0 ){
        $tmp = $_FILES['prdImagen']['tmp_name'];
        $path = 'productos/';
        # renombramos archivo   1658446107.ext
        $n = time();
        $ext = pathinfo( $_FILES['prdImagen']['name'], PATHINFO_EXTENSION );
        $prdImagen = $n.'.'.$ext;
        //subimos el archivo
        move_uploaded_file($tmp, $path.$prdImagen);
    }
    return $prdImagen;
}

function agregarProducto()
{
    //capturamos datos enviados por el form
    $prdPrecio = $_POST['prdPrecio'];
    $prdNombre = $_POST['prdNombre'];
    $idMarca = $_POST['idMarca'];
    $idCategoria = $_POST['idCategoria'];
    $prdDescripcion = $_POST['prdDescripcion'];
    //subir imagen * | 'noDisponible.png'
    $prdImagen = subirImagen();

    /* insertar datos en tabla productos */
    $link = conectar();
    $sql = "INSERT INTO productos
                VALUES 
                    ( 
                     DEFAULT,
                     '".$prdNombre."',
                     ".$prdPrecio.",
                     ".$idMarca.",
                     ".$idCategoria.",
                     '".$prdDescripcion."',
                     '".$prdImagen."',
                     1
                    )";
    try {
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
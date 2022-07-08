<?php

### CRUD de marcas  ###
function listarMarcas()
{
    $link = conectar();
    $sql = "SELECT idMarca, mkNombre
                FROM marcas";
    try {
        $resultado = mysqli_query( $link, $sql );
        return $resultado;
    }catch ( Exception $e ){
        echo $e->getMessage();
        return false;
    }
}

/*
 * listarMarcas()
 * verMarcaPorID()
 * agregarMarca()
 * modificarMarca()
 * eliminarMarca()
 * */
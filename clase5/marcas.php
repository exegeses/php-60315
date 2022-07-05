<?php

##### CRUD DE MARCAS  #####

function listarMarcas()
{
    $link = conectar();
    $sql = "SELECT idMarca, mkNombre
                FROM marcas";
    $resultado = mysqli_query( $link, $sql );
    return $resultado;
}

/*
 * listarMarcas()
 * verMarcaPorID()
 * agregarMarca()
 * modificarMarca()
 * eliminarMarca()
 * */
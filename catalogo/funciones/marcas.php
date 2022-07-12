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

function verMarcaPorID( int $idMarca ) : bool|array
{
    $link = conectar();
    $sql = "SELECT idMarca, mkNombre
                FROM marcas 
                WHERE idMarca = ".$idMarca;
    try {
        $resultado = mysqli_query($link, $sql);
        $marca = mysqli_fetch_assoc($resultado);
        return $marca;
    }catch ( Exception $e ){
        echo $e->getMessage();
        return false;
    }
}

function agregarMarca() : bool
{
    $mkNombre = $_POST['mkNombre'];
    $link = conectar();
    $sql = "INSERT INTO marcas
                    ( mkNombre )
                VALUE
                    ( '".$mkNombre."' )";
    try {
        $resultado = mysqli_query( $link, $sql );
        return  $resultado;
    }catch (Exception $e)
    {
        echo $e->getMessage();
        return false;
    }
}

function modificarMarca()
{
    $idMarca = $_POST['idMarca'];
    $mkNombre = $_POST['mkNombre'];
    $link = conectar();
    $sql = "UPDATE marcas
                SET mkNombre = '".$mkNombre."'
                WHERE idMarca = ".$idMarca;
    try {
        $resultado = mysqli_query($link, $sql);
        return  $resultado;
    }catch ( Exception $e )
    {
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
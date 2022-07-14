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

function eliminarMarca() : bool
{
    $idMarca = $_POST['idMarca'];
    $link = conectar();
    $sql = "DELETE FROM marcas
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
 * funci´on para checkear si hay productos relacionados
 * */
function isAnyProd() : int
{
    $idMarca = $_GET['idMarca'];
    $link = conectar();
    $sql = "SELECT 1 FROM productos
                WHERE idMarca = ".$idMarca;
    try
    {
        $resultado = mysqli_query( $link, $sql );
        $cantidad = mysqli_num_rows($resultado);
        return $cantidad;

    }catch ( Exception $e )
    {
            echo $e->getMessage();
            return 0;
    }
}

/*
 * listarMarcas()
 * verMarcaPorID()
 * agregarMarca()
 * modificarMarca()
 * eliminarMarca()
 * */
<?php

##### CRUD de usurios

function listarUsuarios()
{
    $link = conectar();
    try {
        $sql = "SELECT id,nombre,apellido,email, rol
                    FROM usuarios u
                    JOIN roles r ON u.idRol = r.idRol";
        $resultado = mysqli_query($link, $sql);
        return $resultado;
    } catch (Exception $e) {
        echo $e->getMessage();
        return false;
    }
}

function registrar() : bool
{
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $clave = $_POST['clave']; // sin encriptar
    $idRol = 3;

    ## encriptamos la clave
    $claveHash = password_hash( $clave, PASSWORD_DEFAULT );

    $link = conectar();
    $sql = "INSERT INTO usuarios
                VALUE
                (   DEFAULT,
                    '".$nombre."',
                    '".$apellido."',
                    '".$email."',
                    '".$claveHash."',
                    ".$idRol."
                )";
    try {
        $resultado = mysqli_query($link, $sql);
        return $resultado;
    }
    catch ( Exception $e ){
        echo $e->getMessage();
        return false;
    }
}
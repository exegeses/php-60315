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

function verUsuarioPorID()
{
    $idUsuario = $_GET['id'];
    $link = conectar();
    try {
        $sql = "SELECT id, nombre, apellido, email, 
                        rol, u.idRol
                    FROM usuarios u
                    JOIN roles r ON u.idRol = r.idRol
                    WHERE id = ".$idUsuario;
        $resultado = mysqli_query($link, $sql);
        $usuario = mysqli_fetch_assoc($resultado);
        return $usuario;
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

function modificarUsuario()
{
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];

    $sqlRol = "";
    if( isset($_POST['idRol']) ){
        $idRol = $_POST['idRol'];
        $sqlRol = ", idRol = ".$idRol;
    }
    $id = $_POST['id'];
    $link = conectar();
    $sql = "UPDATE usuarios 
                SET   nombre = '".$nombre."',
                    apellido = '".$apellido."',
                       email = '".$email."'";
    $sql .= $sqlRol;
    $sql .= " WHERE id = ".$id;
    try{
        $resultado = mysqli_query( $link, $sql );

        if( $_SESSION['idRol'] != 1 ){
            $_SESSION['nombre'] = $nombre;
            $_SESSION['apellido'] = $apellido;
            $_SESSION['email'] = $email;
        }
        return $resultado;
    }
    catch ( Exception $e ){
        echo $e->getMessage();
        return false;
    }
}
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

function modificarClave()
{
    //capturamos la clave actual sin encriptar
    $clave = $_POST['clave'];
    /** obtenemos la contraseña actual encriptada **/
    $link = conectar();
    $sql = "SELECT clave FROM usuarios
                WHERE id = ".$_SESSION['id'];
    try {
        $resultado = mysqli_query($link, $sql);
    }catch ( Exception $e )
    {
        echo $e->getMessage();
        return false;
    }
    //clave encriptada
    $usuario = mysqli_fetch_assoc($resultado);
    $claveHash = $usuario['clave'];
    //comparamos claves
    if ( password_verify( $clave, $claveHash ) ){
        //si coinciden, entonces
            //capturamos nueva clave + nueva clave repetida
            // y ver qhe coincidan.
        $newClave = $_POST['newClave'];
        $newClave2 = $_POST['newClave2'];
        if( $newClave == $newClave2 ){
            //si coinciden, encriptamos y modificamos clave
            $newClaveHash = password_hash( $newClave, PASSWORD_DEFAULT );
            $sql = "UPDATE usuarios
                        SET clave = '".$newClaveHash."'
                        WHERE id = ".$_SESSION['id'];
            try {
                //modificación de clave en tabla usuarios
                $resultado = mysqli_query($link, $sql);
                return $resultado;
            }
            catch ( Exception $e ){
                echo $e->getMessage();
                return false;
            }
        }
        // si no counciden las claves nueva y repite
        header('location: formModificarClave.php?error=2');
        return false;
    }
    // si no coinciden clave actual con encriptada
    header('location: formModificarClave.php?error=1');
    return false;

}

/* genear un código aleatorio
    de n caractéres
    que contenga minúsculas, mayúsculas y números
 */

function codigoAleatorio( $largo = 24 )
{
    $seed = [
        'a', 'A', 'b', 'B', 'c', 'C', 'd', 'D', 'e', 'E',
        'f', 'F','g', 'G', 'h', 'H', 'i', 'I', 'j', 'J',
        'k', 'K', 'l', 'L', 'm', 'M', 'n', 'N', 'o', 'O',
        'p', 'P', 'q', 'Q', 'r', 'R', 's', 'S', 't', 't',
        'T', 'u', 'U', 'v', 'V', 'w', 'W', 'x', 'X', 'y',
        'Y', 'z', 'Z', 1, 2, 3, 4, 5, 6, 7, 8, 9
    ];
    $largoSeed = count($seed) - 1;
    $codigo = '';

    for ( $i = 0; $i < $largo; $i++ )
    {
        $codigo .= $seed[ rand( 0, $largoSeed ) ];
    }
    return $codigo;
}



/**
* función para envio de email y posterior cambio de contraseña
 */
function mailResetPass()
{
    $email = $_POST['email'];
    $sql =  "SELECT email 
                FROM usuarios 
                WHERE email = '".$email."'";
    $link = conectar();
    try{
        $resultado = mysqli_query($link, $sql);
        $cantidad = mysqli_num_rows($resultado);
        /* 0 email mail --  1 email correcto */
        if ( $cantidad == 0 ){
            //redirección el formulario
            header('location: formResetPass.php?error=1');
            return false;
        }

        //generación de código aleatorio
        //guardar ese código en table password_resets
        //armar y enviar email con ese código
        $codigo = codigoAleatorio();

    }
    catch(Exception $e){
        echo $e->getMessage();
        return false;
    }
}
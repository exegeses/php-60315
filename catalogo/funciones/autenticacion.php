<?php

    function login()
    {
        $email = $_POST['email'];
        $clave = $_POST['clave'];
        $link = conectar();
        $sql = "SELECT id, nombre, apellido, email, clave, idRol  
                    FROM usuarios
                    WHERE email = '".$email."'";
        try{
            $resultado = mysqli_query($link, $sql);
            $cantidad = mysqli_num_rows($resultado);
        }
        catch ( Exception $e ){
            echo $e->getMessage();
        }

        //si cantidad es == 0   -> usuario mal
        //si cantidad es == 1   -> usuario ok
        if( $cantidad == 0 ){
            //redirección a formLogin + mostrar mensaje de error
            header( 'location: formLogin.php?error=1' );
        }
        else{
            //array asociativo con datos del usuario
            $usuario = mysqli_fetch_assoc( $resultado );
            //verificar la clave
            if (  password_verify( $clave, $usuario['clave'] )  ){
                //acá ya sabemos que se logueó bien
                ######### RUTINA DE AUTENTICACIÓN
                $_SESSION['login'] = 1;
                #registramos datos de usuario
                $_SESSION['id'] = $usuario['id'];
                $_SESSION['nombre'] = $usuario['nombre'];
                $_SESSION['apellido'] = $usuario['apellido'];
                $_SESSION['email'] = $usuario['email'];
                $_SESSION['idRol'] = $usuario['idRol'];

                //redirección a admin
                header( 'location: admin.php' );
                return;
            }
            header('location: formLogin.php?error=1');
        }

    }

    function logout()
    {
        session_destroy();
        header('refresh:3;url=index.php');
    }

    function autenticar()
    {
        if( !isset( $_SESSION['login'] ) ){
            header('location: formLogin.php?error=2');
        }
    }

    function noAdmin()
    {
        if ( !isset($_SESSION['idRol']) || $_SESSION['idRol'] != 1 )
        {
            header('location: noAdmin.php');
        }
    }
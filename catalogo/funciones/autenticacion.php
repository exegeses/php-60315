<?php

    function login()
    {
        $email = $_POST['email'];
        $clave = $_POST['clave'];
        $link = conectar();
        $sql = "SELECT id, nombre, apellido, clave  
                    FROM usuarios
                    WHERE email = '".$email."'";
        try{
            $resultado = mysqli_query($link, $sql);
            $cantidad = mysqli_num_rows($resultado);
        }
        catch ( Exception $e ){
            echo $e->getMessage();
            return false;
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
                    //sesiones
                //redirección a admin
                header( 'location: admin.php' );
            }
            header('location: formLogin.php?error=1');
        }

    }

    function logout()
    {

    }

    function autenticar()
    {

    }
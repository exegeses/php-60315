<?php
    session_start();
    //elimina una variable
    unset($_SESSION['numero']);

    //elimina TODAS las variables de sesión
    session_unset();

    //elimina el ARCHIVO de sesión
    session_destroy();
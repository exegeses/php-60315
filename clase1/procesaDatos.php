<?php
    // mostrar un mensaje que diga:
    // tu nombre es: NNNN
    $nombre = $_POST['nombre'];
    //echo 'tu nombre es: ', $nombre;
    if ( $nombre == 'carlos' ){
        echo 'bienvenido';
    }
    else{
        echo 'Usuario desconocido';
    }
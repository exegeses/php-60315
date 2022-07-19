<?php
    //capturamos en archivo enviado
    //$prdImagen = $_POST['prdImagen'];
    $prdImagen = $_FILES['prdImagen'];
    echo '<pre>';
    print_r($prdImagen);
    echo '</pre>';

    $err = $_FILES['prdImagen']['error'];
    echo $err;
    ### copiamos archivo a directorio "productos" ###
    $tmp = $_FILES['prdImagen']['tmp_name'];
    $prdImagen = $_FILES['prdImagen']['name'];
    $path = 'productos/';
    move_uploaded_file($tmp, $path.$prdImagen);
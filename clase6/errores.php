<?php
    $x = 5;
    //$resultado = $x / 'manzana'; //  int / string

    try {
        $resultado = $x / 'manzana';
    }
    catch ( Error $e ){
        $mensaje = date("d/m/Y H:i:s")."\n";
        $mensaje .= 'Mensaje: '.$e->getMessage()."\n";
        $mensaje .= 'Archivo: '.$e->getFile()."\n";
        $mensaje .= 'Línea nº: '.$e->getLine()."\n\n";
        //impresión
       //echo $mensaje;
        ## abrir archivo en modo a
        $fh = fopen('errores.log', 'a+');
        fwrite($fh, $mensaje);
        fclose($fh);
    }
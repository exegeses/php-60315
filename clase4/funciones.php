<?php

    //declaración
    function alCuadrado( int $numero = 2 ) : int
    {
        /* código interno de la función */
        $resultado = $numero * $numero;
        return $resultado;
    }
    //invocación o llamado a ejecución
    echo alCuadrado( 4 );

    echo '<hr>';

    function negrita( string|int $frase ) : string
    {
       return '<b>'. $frase. '</b><br>';
    }
    echo negrita( 'Hola Mundo' );
    echo negrita( 22 );

    echo '<hr>';
    echo negrita( alCuadrado(5) );

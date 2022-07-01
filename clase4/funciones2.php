<?php

    function sumar( $num1, $num2 )
    {
        $resultado = $num1 + $num2;
        return $resultado;
    }
    /* función que divida dos números */
    function dividir( $dividendo, $divisor )
    {
        if ( !is_numeric( $dividendo ) || !is_numeric( $divisor ) ){
            return 'ambos deben ser números';
        }
        if( $divisor == 0 ){
            return 'el divisor no puede ser 0';
        }
        $resultado = $dividendo / $divisor;
        return $resultado;
    }

    echo '<hr>';
    echo sumar( 3, 4);
    echo '<hr>';
    echo dividir( 'manzana', 10 );
    echo '<hr>';
    echo dividir( 5, 10 );
    echo '<hr>';
    echo dividir( 6, 0 );
<?php

 /* genear un código aleatorio
    de n caractéres
    que contenga minúsculas, mayúsculas y numeros
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

echo codigoAleatorio();

echo '<hr>';

function generateRandomString($n){
    $diccionary=array(100);
    $output='';
    $diccionaryCount=count($diccionary);
    for($i=0;$i <= $n;$i++){
        $output .= rand(0,$diccionaryCount);
    }
    return $output;
}

echo generateRandomString(24);

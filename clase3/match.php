<?php
    date_default_timezone_set('America/Argentina/Buenos_Aires');
    /* match es una estructora de control */
    // podemos verla como equiivalente a un switch
    $nDiaSemana = date('w');

    $dia = match ( $nDiaSemana ){
        0 => 'Domingo',
        1 => 'Lunes',
        2 => 'Martes',
        3 => 'Miércoles',
        4 => 'Jueves',
        5 => 'Viernes',
        default => 'Sabado'
    };
    echo $dia;


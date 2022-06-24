<?php
    date_default_timezone_set('America/Argentina/Buenos_Aires');
    //mostrar fecha
    // formato Jueves 23/06/2022

/* obtenemos string con el día de la semana EN INGLÉS */
    $diaSemanaEng = date('l');
/*
    if( $diaSemanaEng == 'Sunday' ){
        $diaSemana = 'Domingo';
    }
    else if( $diaSemanaEng == 'Monday' ){
        $diaSemana = 'Lunes';
    }
    else if( $diaSemanaEng == 'Tuesday' ){
        $diaSemana = 'Martes';
    }
*/

    switch ( $diaSemanaEng ){
        case 'Sunday':
            $diaSemana = 'Domingo';
            break;
        case 'Monday':
            $diaSemana = 'Lunes';
            break;
        case 'Tuesday':
            $diaSemana = 'Martes';
            break;
        case 'Wednesday':
            $diaSemana = 'Miércoles';
            break;
        case 'Thursday':
            $diaSemana = 'Jueves';
            break;
        case 'Friday':
            $diaSemana = 'Viernes';
            break;
        case 'Saturday':
            $diaSemana = 'Sábado';
            break;
    }

    $fecha = date( 'd/m/Y H:i:s');
    echo $diaSemana,' ', $fecha;



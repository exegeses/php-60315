<?php

const SERVER = 'localhost';
const USUARIO = 'root';
const CLAVE = 'root';
const BASE = 'catalogo60315';

/* remotos
const SERVER = 'localhost';
const USUARIO = 'id19439035_marcos';
const CLAVE = '0&6BZ-yHa&hCDkYN';
const BASE = 'id19439035_catalogo'; */

function conectar()
{
    try {
        $link = mysqli_connect(
            SERVER,
            USUARIO,
            CLAVE,
            BASE
        );
        return $link;
    }
    catch ( Exception $e )
    {
        //función de logueo de errores
        //redirección a internal.php
        header('location: internal.php');
    }

}


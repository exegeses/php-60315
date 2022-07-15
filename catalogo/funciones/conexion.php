<?php

const SERVER = 'localhost';
const USUARIO = 'root';
const CLAVE = 'root';
const BASE = 'catalogo60315';

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


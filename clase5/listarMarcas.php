<?php

# Conexión a server y selección de base de datos
    $link = mysqli_connect(
                    'localhost',
                    'root',
                    'root',
                    'catalogo60315'
                );
# Creaci´on de mensaje SQL
    $sql = "SELECT idMarca, mkNombre
                FROM marcas";

# Ejecución de mensaje SQL
    $resultado = mysqli_query( $link, $sql );

# Informes (muestreo de reporte en pantalla)
    //echo $resultado; no se puede imprimir un objeto

while ( $marca = mysqli_fetch_assoc($resultado) )
{
    echo $marca['mkNombre'], '<br>';
}




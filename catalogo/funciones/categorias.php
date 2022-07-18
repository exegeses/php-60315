<?php

### CRUD de categorías  ###
function listarCategorias()
{
    $link = conectar();
    $sql = "SELECT idcategoria, catNombre
                FROM categorias";
    try {
        $resultado = mysqli_query( $link, $sql );
        return $resultado;
    }catch ( Exception $e ){
        echo $e->getMessage();
        return false;
    }
}

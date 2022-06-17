<?php
    //utilizamos el símbolo $ para crear una variable
    $numero = 127;
    echo $numero * 2;

    echo '<br>';
    echo '<img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse4.mm.bing.net%2Fth%3Fid%3DOIP.WoodtqqImabBruMhTJmeTQAAAA%26pid%3DApi&f=1">';
    $nombre = 'marcos';
    echo $nombre;
?>
    <h1>Esto es HTML</h1>
    <p>
        acá podríamos tener MUCHO contenido HTML
    </p>
<?php
    echo 'El número es: ', $numero;
?>
<hr>
<?php
    $sql = "SELECT precio, ambientes, direccion
                FROM 
                WHERE precio < ". $numero;
?>

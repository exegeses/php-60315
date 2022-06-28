<?php
    $n = 1;//inicio
    while( $n < 15 )// límite
    {
        //bloque de código a iterar
        echo $n, '<br>' ;
        $n++; // incremento
    }

    echo '<hr>';

    $marcas = [
        'Adidas','Nike','Puma',
        'UniQlo','Assics','New Balance',
        'Topper'
    ];

    $n = 0; // inicio
    $cantidad = count($marcas);
    echo '<ul>';
    while ($n < $cantidad) { //limite
        //bloque de codigo
        echo '<li>', $marcas[$n], '</li>' ;
        $n++;
    }
    echo '</ul>';
?>
<hr>

    <ul>
<?php
    $i = 0;
    while ( $i < $cantidad )
    {
?>
        <li><?= $marcas[$n] ?></li>
<?php
        $i++;
    }
?>
    </ul>


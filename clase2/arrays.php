<?php
/*
    $marca = 'Adidas';
    $marca = 'Nike';
    $marca = 'Puma';
    $marca = 'UniQlo';
    $marca = 'Assics';
    $marca = 'New Balance';
    $marca = 'Topper';
*/
    $marca = [
                'Adidas','Nike','Puma',
                'UniQlo','Assics','New Balance',
                'Topper'
             ];

    echo $marca[2];
?>
<br>
<?php
    $semana = [
                'Domingo', 'Lunes', 'Martes',
                'Miércoles','Jueves','Viernes',
                'Sábado'
            ];
    date_default_timezone_set('America/Argentina/Buenos_Aires');
    $nDia = date('w');
    //echo $nDia número del día de la semana 0-6
    echo $semana[ $nDia ];
?>


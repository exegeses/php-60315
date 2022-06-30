<?php
    $locaciones3 =
        [
            'angkor'=>'Cambodia',
            'azul'=>'Turquía',
            'basil'=>'Rusia',
            'burj'=>'Dubai',
            'colosseo'=>'Italia',
            'easter'=>'Chile',
            'eiffel'=>'Francia',
            'gizah'=>'Egipto',
            'ha-long'=>'Vietnam',
            'liberty'=>'USA',
            'machu'=>'Peru',
            'opera'=>'Australia',
            'palace'=>'Tailandia',
            'petra'=>'Jordania',
            'sagrada'=>'España',
            'santorini'=>'Grecia',
            'taj'=>'India',
            'wall'=>'China'
        ];

    //foreach ( $contenedor as $valor )
    //foreach ( $contenedor as $clave => $valor )
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bucle Foreach</title>
</head>
<body>
    <h1>Bucle foreach</h1>

    <ul>
<?php
    foreach ( $locaciones3 as $clave => $pais )
    {
?>
        <li><?= $pais ?>, (<?= $clave ?>)</li>
<?php
    }
?>
    </ul>

</body>
</html>

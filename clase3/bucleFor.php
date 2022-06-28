<?php
    $fotos = [
                '2d', 'murdoc', 'noodles', 'russel'
              ];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Bucle for</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h1>Bucle For</h1>

    <main>
<?php
    $cantidad = count($fotos);
    //inicio de bucle
    for ( $i=0; $i < $cantidad; $i++ )
    {
?>
        <article>
            <img src="imgs/<?= $fotos[$i] ?>.jpg">
            <span><?= $fotos[$i] ?></span>
        </article>
<?php
    }
    //fin de bucle
?>
    </main>

</body>
</html>
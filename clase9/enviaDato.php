<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="enviaDato.php" method="post">
        <input type="text" name="dato" placeholder="ingrese un dato">
        <button>enviar</button>
    </form>

    <?php
        if ( isset( $_POST['dato'] ) ){
    ?>
    <hr>
        Dato enviado: <?= $_POST['dato']; ?>
    <?php
        }
    ?>

</body>
</html>
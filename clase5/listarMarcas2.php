<?php
    require 'conexion.php';
    require 'marcas.php';
    $marcas = listarMarcas();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listador de marcas</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <header class="p-4 bg-danger">
        <nav class="container">menu</nav>
    </header>
    <main class="container py-3">
        <h1>Listado de marcas</h1>
        <ul class="col-4">
<?php
        while ( $marca = mysqli_fetch_assoc( $marcas ) ){
?>
            <li><?= $marca['mkNombre'] ?></li>
<?php
        }
?>
        </ul>

    </main>
    <footer class="fixed-bottom bg-light text center p-4">
        leyenda de pie de página
    </footer>

</body>
</html>
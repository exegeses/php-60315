<?php
//require 'config/config.php';
    require 'funciones/conexion.php';
    require 'funciones/marcas.php';
    $marcas = listarMarcas();

	include 'layout/header.php';
	include 'layout/nav.php';
?>

    <main class="container">
        <h1>Panel de administración de marcas</h1>

        <a href="admin.php" class="btn btn-outline-secondary my-2">
            Volver a dashboard
        </a>

        <table class="table table-borderless table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Marca</th>
                    <th colspan="2">
                        <a href="formAgregarMarca.php" class="btn btn-outline-secondary">
                            Agregar
                        </a>
                    </th>
                </tr>
            </thead>
            <tbody>
<?php
        while ( $marca = mysqli_fetch_assoc( $marcas ) )
        {
?>
                <tr>
                    <td><?= $marca['idMarca'] ?></td>
                    <td><?= $marca['mkNombre'] ?></td>
                    <td>
                        <a href="formModificarMarca.php?idMarca=<?= $marca['idMarca'] ?>" class="btn btn-outline-secondary">
                            Modificar
                        </a>
                    </td>
                    <td>
                        <a href="" class="btn btn-outline-secondary">
                            Eliminar
                        </a>
                    </td>
                </tr>
<?php
        }
?>
            </tbody>
        </table>

        <a href="admin.php" class="btn btn-outline-secondary my-2">
            Volver a dashboard
        </a>

    </main>

<?php  include 'layout/footer.php';  ?>
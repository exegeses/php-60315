<?php

    require 'config/config.php';
    require 'funciones/autenticacion.php';
        autenticar();
        noAdmin();
    require 'funciones/conexion.php';
    require 'funciones/usuarios.php';
    $usuarios = listarUsuarios();
	include 'layout/header.php';
	include 'layout/nav.php';
?>

    <main class="container">
        <h1>Panel de administración de usuarios</h1>

        <a href="admin.php" class="btn btn-outline-secondary my-2">
            Volver a dashboard
        </a>

        <table class="table table-borderless table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th colspan="2">
                        <a href="formAgregarUsuario.php" class="btn btn-outline-secondary">
                            Agregar
                        </a>
                    </th>
                </tr>
            </thead>
            <tbody>
        <?php
                while( $usuario = mysqli_fetch_assoc( $usuarios ) ){  
        ?>
                <tr>
                    <td><?= $usuario['id']; ?></td>
                    <td><?= $usuario['nombre']; ?></td>
                    <td><?= $usuario['apellido']; ?></td>
                    <td><?= $usuario['email']; ?></td>
                    <td>
                        <a href="formModificarUsuario.php?id=<?= $usuario['id'] ?>" class="btn btn-outline-secondary">
                            Modificar
                        </a>
                    </td>
                    <td>
                        <a href="formEliminarUsuario.php?id=<?= $usuario['id'] ?>" class="btn btn-outline-secondary">
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
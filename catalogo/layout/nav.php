<!-- header/nav -->
<header class="p-4 bg-dark text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="index.php" class="nav-link px-3">
                        <img src="imagenes/m-iso.jpg" id="m-logo" alt="logo">
                    </a>
                </li>
                <li><a href="adminMarcas.php" class="nav-link px-3 text-white a-menu">Marcas</a></li>
                <li><a href="adminCategorias.php" class="nav-link px-3 text-white a-menu">Categorías</a></li>
                <li><a href="adminProductos.php" class="nav-link px-3 text-white a-menu">Productos</a></li>
                <li><a href="adminUsuarios.php" class="nav-link px-3 text-white a-menu">Usuarios</a></li>
            </ul>


            <div class="text-end">
<?php
        ######### si NO está logueado
            if ( !isset( $_SESSION['login'] ) ){
?>
                <a href="formLogin.php" class="btn btn-outline-light me-2">Login</a>
                <a href="formRegister.php" class="btn btn-warning">Registro</a>
<?php
            }
            else{
                ######### si ESTÁ logueado
?>
                <div class="dropdown">
                    <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                        <?= $_SESSION['nombre']; ?>
                        <?= $_SESSION['apellido']; ?>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                        <li>
                            <a class="dropdown-item" href="logout.php">
                                <i class="bi bi-box-arrow-right"></i>
                                Salir
                            </a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item" href="formModificarUsuario.php">
                                <i class="bi bi-file-person"></i>
                                Modificar perfil
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="formModificarClave.php">
                                <i class="bi bi-key"></i>
                                Modificar contraseña
                            </a>
                        </li>
                    </ul>
                </div>
<?php
            }
?>

            </div>
        </div>
    </div>
</header>
<!-- header -->
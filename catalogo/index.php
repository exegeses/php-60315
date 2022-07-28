<?php
//require 'config/config.php';
    include 'layout/header.php';
    include 'layout/nav.php';
?>

    <main class="container py-4">
        <h1>Catálogo de productos</h1>
        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-4 py-5">


            <article class="col d-flex align-items-start">
                <div class="m-1 producto">
                    <img src="productos/noDisponible.png">
                    <h2><?= 'prdNombre' ?></h2>
                    <span class="precio">$<?= 'prdPrecio' ?></span>
                    <p>
                        Marca: <?= 'mkNombre' ?> <br>
                        Categoría: <?= 'catNombre' ?> <br>
                    </p>
                </div>
            </article>

        </div>
        
    </main>

<?php
    include 'layout/footer.php';
?>
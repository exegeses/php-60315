<?php

    $clave = 'manzana';
    $claveHash = password_hash( $clave, PASSWORD_DEFAULT );
    echo $claveHash;
    echo '<hr>';

    $claveHash = password_hash( $clave, PASSWORD_DEFAULT );
    echo $claveHash;

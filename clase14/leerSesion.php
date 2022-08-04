<?php
    session_start();
    $nombre = $_SESSION['nombre'];
    echo $nombre;
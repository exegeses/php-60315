<?php

    //capturamos datos enviados por el form
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $consulta = $_POST['consulta'];

    //configuramos datos de email a ENVIAR
    $destinatario = 'mtest@robot-mail.com';
    $asunto = 'Email enviado desde mi sitio.';
    $cuerpo = '<div style="background-color: #192c33; padding: 32px; color: #efc161;';
    $cuerpo .= 'font-family: sans-serif; font-size: 1.3em; width: 500px; margin:auto;">';
    $cuerpo .= '<h1><img src="https://php-60315.000webhostapp.com/imagenes/m-iso.jpg" style="width: 64px; vertical-align: middle">';
    $cuerpo .= 'Catálogo de productos</h1>';
    $cuerpo .= 'Nombre: '.$nombre.'<br>';
    $cuerpo .= 'Email: '.$email.'<br>';
    $cuerpo .= 'Consulta: '.$consulta;
    $cuerpo .= '</div>';

    $headers = 'From: azael@hell.com' . "\r\n";
    $headers .= 'Reply-To: no-reply@hell.com' . "\r\n";
    $headers .= 'MIME-Version: 1.0';
    $headers .= 'Content-type: text/html; utf-8';

    mail( $destinatario, $asunto, $cuerpo, $headers );

    require 'config/config.php';
    include 'layout/header.php';
    include 'layout/nav.php';
?>

    <main class="container py-4">
        <h1>Formulario de contacto</h1>

        <div class="alert bg-light p-4 col-8 mx-auto shadow">

            Gracias <?= $nombre ?> por contactarnos.

        </div>


    </main>

<?php
    include 'layout/footer.php';
?>
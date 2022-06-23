<?php
    // mostrar un mensaje que diga:
    // tu nombre es: NNNN
    $nombre = $_POST['nombre'];
    //echo 'tu nombre es: ', $nombre;
    if ( $nombre == 'carlos' ){
        echo '<img src="imgs/ok.png">';
    }
    else{
        echo '<img src="imgs/error.png">';
    }
?>
<hr>
<?php
    //$nombre = $_POST['nombre']; ya está capturado arriba
    if ( $nombre == 'carlos' ){
        $im = 'ok';
    }
    else{
        $im = 'error';
    }
    //echo '<img src="imgs/', $im, '.png">';
?>
<img src="imgs/<?php echo $im ?>.png">

<hr>
<?php
$im = 'error'; //default
if ( $nombre == 'carlos' ){
    $im = 'ok';
}
//echo '<img src="imgs/', $im, '.png">';
?>
<img src="imgs/<?= $im ?>.png">

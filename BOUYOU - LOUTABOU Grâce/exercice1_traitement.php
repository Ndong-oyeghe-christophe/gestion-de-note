<?php
$nombre = $_POST['nombre'];
$i = 0;
$multiplication;
echo'<p> La multiplication de '.$nombre.' est :</p><br>';
for ($i=1; $i < 13; $i++) { 
    $multiplication = $i * $nombre;
    echo'<p>'.$nombre.' * '.$i.' = ' .$multiplication. '</p>';
}

?>
    <style>
        p{
          font-size : 26px;
        }
    </style>
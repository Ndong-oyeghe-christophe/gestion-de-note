<?php
$nombre = $_POST['nombre'];
if ($nombre < 0) {
    echo '<html><script> alert("Impossible de faire la racine carée")</script></html>';
    header("location:exercice2.php");
}else {
    $racine = sqrt($nombre);
    echo '<p> La racine carée de '.$nombre. ' est '.$racine. '</p>';
}

?>
    <style>
        p{
          font-size : 26px;
        }
    </style>
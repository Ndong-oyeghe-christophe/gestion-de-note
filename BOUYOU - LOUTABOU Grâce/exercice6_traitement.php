<?php
$nombre1 = $_POST['nombre1'];
$nombre2 = $_POST['nombre2'];
$nombre3 = $_POST['nombre3'];
$nombre4 = $_POST['nombre4'];
$nombre5 = $_POST['nombre5'];
$ranger = array($nombre1, $nombre2, $nombre3, $nombre4, $nombre5);
sort($ranger);
echo '<p>Plus petit nombre</p>';
print_r ($ranger[0]);
echo '<p><br><br>Plus grand nombre </p>';
print_r ($ranger[4]);
?>


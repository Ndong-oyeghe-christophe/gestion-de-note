
<?php
$nombre1 = $_POST['nombre1'];
$nombre2 = $_POST['nombre2'];
$nombre3 = $_POST['nombre3'];
$ranger = array($nombre1, $nombre2, $nombre3);
sort($ranger);
echo '<p>Plus petit nombre</p>';
print_r ($ranger[0]);
echo '<p><br><br>Plus grand nombre </p>';
print_r ($ranger[2]);
?>


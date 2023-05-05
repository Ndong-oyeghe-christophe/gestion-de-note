<?php
$longueur = $_POST['rectangle_longueur'];
    $largeur = $_POST['rectangle_largeur'];
    $prix = $_POST['rectangle_prix'];
    if ($longueur <0 || $largeur <0 || $prix <0) {
        echo '<p> Une des valeure entrée est négative, veuillez la modifier</p>';
    } else {
    $surface = $largeur * $longueur;
    $calcul = $surface * $prix;
    echo '<p> Terrain de forme rectangulaire: <br> Longueur : '.$longueur.'<br> Largeur :'.$largeur.'<br> Prix unitaire : '.$prix.'<br> Surface : '.$surface.'<br>  Prix : ' .$calcul.'</p>';
    }
?>

<style>
        p{
          font-size : 26px;
        }
    </style>
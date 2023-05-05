<?php
$terrain = $_POST['terrain'];
echo $terrain;
else if ($terrain == "triangle") {
    $base = $_POST['triangle_base'];
    $hauteur = $_POST['triangle_hauteur'];
    $prix = $_POST['triangle_prix'];
    if ($base <0 || $hauteur <0 || $prix <0) {
        echo '<p> Une des valeure entrée est négative, veuillez la modifier</p>';
    }else{
    $surface = $base * $hauteur;
    $calcul = $surface * $prix;
    echo '<p> Terrain de forme triangulaire: <br> Longueur de base : '.$base.'<br> Hauteur :'.$hauteur.'<br> Prix unitaire : '.$prix.'<br> Surface : '.$surface.'<br>  Prix : ' .$calcul.'</p>';
    }
}else if ($terrain == "carree"){ 
   
}
?>

<style>
        p{
          font-size : 26px;
        }
    </style>
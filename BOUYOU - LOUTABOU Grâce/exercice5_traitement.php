<?php
$nom = $_POST['nom'];
$poids = $_POST['poids'];
$taille = $_POST['taille'];
$calcul = $poids / $taille;
if ($calcul <=25) {
    echo '<p> Bonjour '.$nom.' vous avez une corpulance maigre</p>';
}else if ($calcul >=18.5 && $calcul <= 24.9) {
    echo '<p> Bonjour '.$nom.' vous avez une corpulance en "nomale"</p> ';
}else if ($calcul >=25 && $calcul <= 29.9 ) {
    echo '<p> Bonjour '.$nom.' vous avez une corpulance en surpoids</p> ';
}else if ($calcul >=30 && $calcul <= 34.9 ) {
    echo '<p> Bonjour '.$nom.' vous avez une obésité modérée</p> ';
}elseif ($calcul >=30 && $calcul <= 34.9) {
    echo '<p> Bonjour '.$nom.' vous avez une obésité sévère</p> ';
}else {
    echo '<p> Bonjour '.$nom.' vous avez une obésité morbide</p> ';
}
?>

<style>
        p{
          font-size : 26px;
        }
    </style>
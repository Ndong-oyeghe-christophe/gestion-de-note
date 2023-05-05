<?php
 $metre = $_POST['carree_metre'];
 $prix = $_POST['carree_prix'];
 if ($metre <0 || $prix <0) {
     echo '<p> Une des valeure entrée est négative, veuillez la modifier</p>';
 } else {
 $surface = $metre * $metre;
 $calcul = $surface * $prix;
 echo '<p> Terrain de forme carrée : <br> Longueur du coté : '.$metre. '<br> Prix unitaire : '.$prix.'<br> Surface : '.$surface.'<br>  Prix : ' .$calcul.'</p>';
 }
?>

<style>
        p{
          font-size : 26px;
        }
    </style>
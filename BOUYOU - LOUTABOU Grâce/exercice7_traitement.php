<?php
$moyenne = $_POST['moyenne'];

switch ($moyenne) {
    case $moyenne < 0 || $moyenne > 20:
        echo '<p> !!!!! Erreur !!!! La moyenne doit est être supérieure ou égale à 0 ou, inférieure ou égale à 20 </p>';
        break;
    case $moyenne < 10:
        echo '<p> Vous avez une mention insuffisante </p>';
        break;
    case $moyenne >= 10 && $moyenne <12:
        echo '<p> Vous avez une mention passable </p>';
        break;
    case $moyenne >= 12 && $moyenne <15:
        echo '<p> Vous avez une mention assez bien </p>';
        break;
    case $moyenne >= 15 && $moyenne <17:
        echo '<p> Vous avez une mention bien </p>';
        break;
    case $moyenne >= 17 && $moyenne <20:
        echo '<p> Vous avez une mention tres bien</p>';
        break;
}
?>

<style>
        p{
          font-size : 26px;
        }
    </style>

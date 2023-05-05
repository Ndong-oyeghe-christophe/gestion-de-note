<?php
$sexe= "F";
if ($sexe == "F" || $sexe == "Féminin" || $sexe == "féminin") {
    echo '<p> Vous êtes une femme</p>';
}else if ($sexe == "M" || $sexe == "Masculin" || $sexe == "masculin") {
    echo '<p>Vous êtes un homme</p>';
}else {
    echo '<p> Sexe non identifiable </p>';
}
 
?>

<style>
        p{
          font-size : 26px;
        }
    </style>
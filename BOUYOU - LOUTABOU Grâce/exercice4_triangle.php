<?php
$valeur = 'triangle';
echo '
<html>
    <form action="exercice4_triangle_traitement.php" method="post">
        <label for="">Forme rectangulaire</label><br>
        <input type="text" value="triangle" name="terrain" hidden>
        <input type="number" name="triangle_base" placeholder="Base">
        <input type="number" name="triangle_hauteur" placeholder="Hauteur">
        <input type="number" name="triangle_prix" placeholder="Prix du metre carré"><br><br>
        <input type="submit" value="Envoyer">
    </form>
    <style>
    form{
        display: inline-block;
        text-align: center;
        height: 300px;
        width: 300px;
        color: antiquewhite;
    }
    label, input{
        color: blue;
        font-size: 20px;
        margin-top : 20px;
    }
    label{
        font-size: 30px;
    }
    .principal{
        color: blue;
    }
</style>
</html>';
?>
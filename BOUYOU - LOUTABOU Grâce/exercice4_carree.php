<?php
$valeur = 'carree';
echo '
<html>
    <form action="exercice4_carree_traitement.php" method="post">
        <label for="">Forme carée</label><br>
        <input type="text" value="carree" name="terrain">
        <input type="number" name="terrain" placeholder="" hidden>
        <input type="number" name="carree_metre" placeholder="Longueur du coté">
        <input type="number" name="carree_prix" placeholder="Prix du metre carré"><br><br>
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
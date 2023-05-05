<?php
echo '
<html>
    <form action="exercice4_rectangle_traitement.php" method="post">
        <label for="">Forme rectangulaire</label><br>
        <input type="number" name="terrain" placeholder="" hidden>
        <input type="number" name="rectangle_longueur" placeholder="Longueur">
        <input type="number" name="rectangle_largeur" placeholder="Largeur">
        <input type="number" name="rectangle_prix" placeholder="Prix du metre carré"><br><br>
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
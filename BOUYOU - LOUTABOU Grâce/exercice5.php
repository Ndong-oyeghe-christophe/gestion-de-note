<?php
echo '
<html>
    <form action="exercice5_traitement.php" method="post">
        <h1>Formulaire d"inscription</h1>
        <label for="">Entrez votre nom  & prénom</label>
        <input type="text" name="nom" class="principal" placeholder="nom&prénom">
        <label for="poids">Entrez votre poids</label>
        <input type="number" name="poids" id="" placeholder="poids" class="principal"><br>
        <label for="taille">Entrez votre taille</label>
        <input type="number" placeholder="Taille" name="taille" class="principal">
        <input type="submit" value="valider">
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
</html>'
?>
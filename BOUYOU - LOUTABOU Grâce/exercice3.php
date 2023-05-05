<?php
echo '
<html>
    <form action="exercice3_traitement.php" method="post">
        <label for="nombre">Entrez trois nombres</label>
        <input type="number" placeholder="nombre 1" name="nombre1" class="principal"><br><br>
        <input type="number" placeholder="nombre 2" name="nombre2" class="principal"><br><br>
        <input type="number" placeholder="nombre 3" name="nombre3" class="principal">
        <input type="submit" value ="Envoyer">
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
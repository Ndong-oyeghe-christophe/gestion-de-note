<?php
echo '
<html>
    <form action="exercice7_traitement.php" method="post">
        <label for="">Entrez votre  moyenne</label>
        <input type="number" name="moyenne" class="principal" placeholder="Moyenne">
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
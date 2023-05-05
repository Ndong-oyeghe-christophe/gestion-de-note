<?php
echo'
    <form action="exercice1_traitement.php" method="post">
        <label for="nombre">Entrez un nombre</label>
        <input type="number" name="nombre" placeholder="nombre" class="principal">
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
    </style>'
?>
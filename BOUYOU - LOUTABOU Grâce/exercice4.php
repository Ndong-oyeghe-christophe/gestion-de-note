<?php
echo '<html>
<br><p>Quelle est la forme de votre terrain ?</p><br>
<section class="ok">

<div><a href="exercice4_carree.php">Carrée</a></div>
<div><a href="exercice4_rectangle.php">Rectangulaire</a></div>
<div><a href="exercice4_triangle.php">Triangulaire</a></div>

</section>


<style>
div{
    height: 70px;
    width:  250px;
    font-size: 30px;
    background-color: rgb(159, 98, 213);
    border-radius: 10px 10px;
    text-decoration: none;
    margin-left: 30px;
   
}
p{
    font-size: 30px;
}
.ok{
    display: flex;
}  
a{
    color: azure;
    margin-top: 40px;
    margin-left: 30px;
}  
</style>
</html>'
?>
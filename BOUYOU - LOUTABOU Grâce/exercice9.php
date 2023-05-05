<?php
$note_maths = 15;
$note_francais = 12;
$notes_histoire_geo = 9;
$moyenne = 0;
$moyenne = ($note_francais + $note_maths + $notes_histoire_geo) / 3; 
echo '<p> Note en math = 15 <br> Note en français = 12 <br> Note en histoire-géo = 9<p>';
echo '<p> La moyenne est de '.$moyenne.' /20 </p>'; 
?>

<style>
        p{
          font-size : 26px;
        }
    </style>
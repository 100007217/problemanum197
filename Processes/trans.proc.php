<?php
    $frase=$_POST['frase'];
    echo $frase. "<br>";

    $chars = str_split($frase);
 
    foreach ($chars as $char) {
        echo $char;
        echo "<br>";
    }
?>
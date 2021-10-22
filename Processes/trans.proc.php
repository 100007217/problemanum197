<?php
    $a = $_POST['frase']; //Recogemos la variable
    $c = ""; //Asignamos valor 
    $d = ""; //Asignamos valor

    for ($i=0;$i < strlen($a); $i++){
        if ($i%2==0){ //Cogemos la variable que itera y dependiendo de si es para o no hará algo
            $c = $c.$a[$i]; //Asignamos los valores pares a $c
        }else{
            $d = $d.$a[$i]; //Asignamos los impares a $d
        }
    }
        $dreverse = strrev($d); //$d nos devuelve el resultado pero al revés, por eso le damos la vuelta
        $finalres = $c.$dreverse;
        echo $finalres;
        
?>
<link rel="stylesheet" href="./CSS/style.css">
<?php

    //Recogemos variable que nos pase el Sr. Afredo Blum
    $frasealfredo="Pasame algo Alfredo Blum";
    
    
    $vocalesstring="aeiouAEIOU";
    echo "La frase introducida es ".$frase. "<br>";

    $frasefinal= "";
    $stringcons="";

    $frasecaracteres = str_split($frase);
    $vocales = str_split($vocalesstring);
    $numcaracteres = strlen($frase);
    echo "Numero de caracteres es ".$numcaracteres. "<br></br>";

    $contadorcons=0;
    for ($i=0; $i < $numcaracteres; $i++){ 
        echo "Letra actual ".$frasecaracteres[$i];

        if(in_array($frasecaracteres[$i], $vocales)){
            echo " -> Encontré vocal";

            if ($contadorcons>1) {
                //Añadimos la consonantes especularmente
                $strinconsreversed=strrev($stringcons);
                $frasefinal=$frasefinal.$strinconsreversed;
                $frasefinal=$frasefinal.$frasecaracteres[$i];
                $strinconsreversed="";
                
            }else {
                //Añadimos la unica consonante anterior
                $frasefinal=$frasefinal.$stringcons;
                //AÑadimos la vocal que toque
                $frasefinal=$frasefinal.$frasecaracteres[$i];
                echo "<br>".$frasefinal;
            }
            //Reseteamos el contador de consonantes y sus strings
            $contadorcons=0;
            $stringcons="";
        }else {
            echo " ->  Encontré una consonante";
            $contadorcons=$contadorcons+1;
            $stringcons=$stringcons.$frasecaracteres[$i];
            echo "<br>Es la linea de consonantes actual: ".$stringcons;
        }
        echo "<br>";
        echo "<br>Frase final por ahora: ".$frasefinal;
        echo "<br></br>";
    }   
    //Ultima ejecucion por si hay alguna consonante
    if ($contadorcons=0) {
        echo "No hay ninguna cononante ya";
    } else {
        $strinconsreversed=strrev($stringcons);
        $frasefinal=$frasefinal.$strinconsreversed;
    }
    //Print frase final
    echo "<br>Frase final FINAL: ".$frasefinal."<br>";
?>
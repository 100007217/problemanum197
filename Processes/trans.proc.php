<?php
    $frase=$_POST['frase'];
    $vocalesstring="aeiou";
    echo $frase. "<br>";

    $frasefinal= "";

    $frasecaracteres = str_split($frase);
    $vocales = str_split($vocalesstring);
    $numcaracteres = strlen($frase);
    echo "Numero de caracteres es ".$numcaracteres. "<br></br>";



    $contadorcons=0;
    for ($i=0; $i < $numcaracteres; $i++){ 
        echo $frasecaracteres[$i];

        if(in_array($frasecaracteres[$i], $vocales)){
            echo " Encontré vocal";
            if ($contadorcons>1) {
                
            }else {
                $frasefinal=$frasefinal.$frasecaracteres[$i];
            }
            $contadorcons=0;
        }else {
            echo " Encontré una consonante";
            $contadorcons=$contadorcons+1;
            $frasefinal=$frasefinal.$frasecaracteres[$i];
        }
        echo "<br>";
        echo $frasefinal."<br>";
        echo "<br></br>";
    }                                                                                                                                                    n
?>
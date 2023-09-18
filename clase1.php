<?php
//1. Como obtener la longitud de una cadena: 
//   Con la funcion strlen(cadena)

//2. Funcion para invertir una cadena strrev()
$cadena="Hola mundo";

echo "la cadena es ".$cadena." pero invertida con strrev es: ".strrev($cadena);

echo "<br>Otra forma es: ";

function invertir($cadena){
    $cant=strlen($cadena);
    for($i=$cant-1;$i>=0;$i--){
        echo $cadena[$i]." - ";
    }
}
invertir($cadena);

//3. Funcion que reciba 3 numeros y diga cual es el mayor, el del medio y el menor.
function numeros($num1, $num2, $num3){

 //hacerrrrrr   
}


?>
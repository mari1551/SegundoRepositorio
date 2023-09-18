<?php
//1. Combinar 2 arrays en uno solo sin duplicados

echo "<b>1. Combina 2 arrays en uno solo sin duplicados</b><br>";
$array1 = [1, 2, 3, 4];
$array2 = [2, 4, 6, 8];

$resultado = combinar($array1, $array2);
print_r($resultado);
function combinar($array1, $array2) {
    $resultado = array_merge($array1, $array2);
    $resultado = array_unique($resultado);
    return $resultado;
}

/*Probar de otra forma */
echo "<br><br>*   Otra forma de hacerlo:<br>";

$array3=combinacion($array1,$array2);
print_r($array3);

function combinacion($array1,$array2){
    $array3=[];
    $cant=0;
    for($i=0;$i<count($array1);$i++){
        if(buscar($array1[$i],$array3)==false){
            $array3[$cant]=$array1[$i];
            $cant++;
        }
    }
    for($i=0;$i<count($array2);$i++){
        if(buscar($array2[$i],$array3)==false){
            $array3[$cant]=$array2[$i];
            $cant++;
        }
    }
    return $array3;
}
function buscar($num,$array3){
    $band=false;
    for($i=0;$i<count($array3);$i++){
        if($num==$array3[$i]){
            $band=true;
            break;
        }
    }
    return $band;
}


//2. Cuenta cuantas veces aparece un elemento en especifico en un array

echo "<b><br><br>2. Cuenta cuantas veces aparece un elemento en especifico en un array</b><br>";
$array4=[];
$array4=llenar_array();
print_r($array4);
echo "<br>";
mostrar_veces($array4);
function llenar_array(){
    for($i=0;$i<20;$i++){
        $array4[$i]=rand(1,10);
    }
    return $array4;
}
function mostrar_veces($array4){
    for($i=0;$i<20;$i++){
        $num=contar($array4[$i],$array4);
        echo "El elemento: ".$array4[$i]." se repite ".$num." veces<br>";
    }
}
function contar($elem,$array4){
    $cont=0;
    for($i=0;$i<20;$i++){
        if($array4[$i]==$elem) $cont++;
    }
    return $cont;
}

//3. Elimina los elementos duplicados de un array
echo "<b><br><br>3. Elimina los elementos duplicados de un array</b><br>";
$array5 = [1, 2, 2, 3, 4, 4, 5];
echo "<br>Array original: <br>";
print_r($array5);
$array6 = array_unique($array5);
$array6 = array_values($array6);
echo "<br>Array sin duplicados: <br>";
print_r($array6);

//otra forma de hacerlo
echo "<br><br>*   Otra forma de hacerlo:<br>";
$indice=0;
$array7=[];
for($i=0;$i<count($array5);$i++){
    if(buscar3($array7,$array5[$i])==false){
        $array7[$indice]=$array5[$i];
        $indice++;
    }
}
print_r($array7);
function buscar3($array, $num){
    $band=false;
    for($i=0;$i<count($array);$i++){
        if($array[$i]==$num){
            $band=true;
            break;
        }
    }
    return $band;
}

//4. Busca y elimina todos los elementos de un valor especifico en un array
echo "<b><br><br>4. Busca y elimina todos los elementos de un valor especifico en un array</b><br>";
$array8 = [1, 2, 2, 3, 4, 4, 5];
$array_aux=[];
$a_borrar=4;
$cont=0;
for($i=0;$i<count($array8);$i++){
    if($array8[$i]<>$a_borrar){
        $array_aux[$cont]=$array8[$i];
        $cont++;
    }
}
echo "<br>Array original: <br>";
print_r($array8);
echo "<br>Array despues de eliminar: <br>";
$array8=$array_aux;
print_r($array8);

//5. Crear un buscador de palabras de un array asociativo, mostrar la posicion del mismo.
echo "<b><br><br>5. Crear un buscador de palabras de un array asociativo, mostrar la posicion del mismo.</b><br>";
$array9=[
    "Maria"=>"Amarillo",
    "Pedro"=>"Azul",
    "Juan"=>"Rojo",
    "Mariana"=>"Verde",
    "Nicole"=>"Blanco",
];
$color="Rojo";
foreach($array9 as $indice => $valor){
    if($valor==$color){
        echo "La palabra: ".$color." Se encuentra en el array en el indice: ".$indice;
    }
}


?>
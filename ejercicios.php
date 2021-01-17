<?php

echo "Ejercicio 1";
$arreglo = [
	'keyStr1' => 'lado',
	0 => 'ledo',

	'keySr2' => 'lido',
	1 => 'lodo',
	2 => 'ludo'
];

foreach($arreglo as $valor){
    echo "$valor, ";
}
echo "<br>";
echo "decirlo al reves lo dudo <br>";

$arreglo_reverse = array_reverse($arreglo);
foreach ($arreglo_reverse as $valor){
    echo "$valor, ";
}

echo "<br>";
echo "Ejercicio 2";

//Ejercicio  2

$paises = [
    'Brasil' => [
        'Rio de Janeiro',
        'Manaos',
        'Porto Alegre'
    ],
    
    'Peru' => [
        'Chiclayo',
        'Arequipa',
        'Lima'
    ],

    'Chile' => [
        'Santiago de Chile',
        'Temuco',
        'Iquique'
    ],
    
    'Colombia' => [
        'Bogota',
        'Medellin',
        'Cali'
    ],

    'Bolovia' =>[
        'La paz',
        'Cochabamba',
        'Sucre'
    ],
];

foreach ($paises as $key => $value) {
    echo "$key: ";
    foreach ($value as $valor) {
        echo "$valor, ";
    }
    echo "<br>";
}

echo "<br>";
echo "Ejercicio 3";
//Ejercicio 3

$valores = [23, 54, 32, 67, 34, 78, 98, 56, 21, 34, 57, 92, 12, 5, 61];

rsort($valores);

echo "<br>";

for ($i=0; $i < 3 ; $i++) { 
    echo "$valores[$i], ";
}
echo "<br>";
sort($valores);

for ($i=0; $i < 3 ; $i++) { 
    echo "$valores[$i], ";
}
?>
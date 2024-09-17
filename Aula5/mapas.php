<!-- mapas ordenados > ARRAY 
qualquer coisa pode ser usado para ser o indice em php
mapa ordenado é um estrutura chave e valor
-->
<?php

$frutas = array("morango", "mação", "abacaxi");

echo "<p>$frutas[0]</p>"; // acessando a posicao 1 do vetor

$frutas[0] = "laranja";

$frutas["fruta"] = 15;

$cores[0]= "azul";
$cores["cor"] = "laranja";

$mapa = [
    "valor1" => 1, 
    "valor2" => 2,
    "valor3" => 3
];
var_dump($cores);
echo "<p></p>";
print_r($mapa); // print_r só para vetores

ksort($frutas);
print_r($frutas);
asort($frutas); // ordena pelo valor
print_r($frutas); 

foreach($frutas as $chave => $valor){
    echo "<p>Na posição $chave temos a fruta: $valor</p>";
}
echo "Quantidade de elementos: ".count($frutas); // cont quatidade
?>
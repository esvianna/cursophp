<?php

$nome = "Vianna";
$site = 'vtis.com.br';
$ano = 1990;
$salario = 12000.05;
$bloqueado = false;

//////////////////////////////////
$frutas = array("abacaxi","laranja","manga");

//echo $frutas[0];

$nascimento = new Datetime();

//var_dump($nascimento);

////////////////////////////////

$arquivo = fopen("exemplo-variaveis.php","r");

var_dump($arquivo);
?>

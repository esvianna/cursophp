<?php


//null coalescing 

$a = NULL;
$b = 8;
$c = 10;

echo "Valor de a = ".$a;

echo "<br>";

echo "Valor de b = ".$b;


echo "<br>";

echo "Valor de c = ".$c;

echo "<br>";

echo $a ?? $b ?? $c;





?>
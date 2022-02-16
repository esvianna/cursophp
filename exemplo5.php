<?php

/* Exercício 5
$nome = "Vianna";

function teste() {
    
    global $nome;
    echo $nome;
    
}

function teste2(){
    
    $nome = "Eduardo";
    echo $nome." agora no teste 2";
    
}

teste();

teste2();
*/

function setMessage() {
    
    global $message;
    $message = 'Hello World';
    
    return $message;
    
}

setMessage();


echo $message;

?>
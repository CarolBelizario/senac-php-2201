<?php

//Comentário de linha

/*  
Comentário de bloco
*/

//define( 'XPTO', 'Valor sempre igual' );

//echo XPTO;

//$num = 2;

//$var = '<br>' . "Alô mundo! $num";
// o ponto é o operador de concatenação
//aspas duplas para interpolar
//aspas simples são apenas strings sozinhas

//echo $var;


//var_dump($var) ;

//phpinfo(); Informações importantes, como variáveis de ambiente

$domingo = 'Domingo'; 
$segunda = 'Segunda-feira';
$terca = 'Terça-feira';
$quarta = 'Quarta-feira';
$quinta = 'Quinta-feira';
$sexta = 'Sexta-feira';
$sabado = 'Sábado';

$diaSemana = [  1 => 'Domingo', 
                2 => 'Segunda-feira', 
                5 => 'Terça-feira', 
                8 => 'Quarta-feira', 
                10 => 'Quinta-feira', 
                3 => 'Sexta-feira', 
                4 => 'Sábado'];

                
//echo 'Hoje é ' .$diaSemana [10];//Exemplo SEM interpolação

//echo "<br>Hoje é {$diaSemana[2]}";//Exemplo COM interpolação

//também é possível usar índice alfanumérico

$usuario = [  
    ['nome' => 'Luiz', 'senha' => '123'],
    ['nome' => 'Fernando', 'senha' => '321'],
    ['nome' => 'Bono', 'senha' => '627']

];


echo "<pre>\n\n";

var_dump($usuario);
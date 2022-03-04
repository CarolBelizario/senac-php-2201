<?php

function cadastraAluno(array $aluno):bool 
{

    
   $f = fopen( 'alunos.csv' , 'a');
   $escreveu = fwrite( $f, "{$aluno['matricula']};\"{$aluno['nome']}\"\n"); 

   if($escreveu){
       return true;
   }else{
        return false;
   }
}

function listarUsuarios():array
{

    $alunos = [];

    $f = fopen('alunos.csv', 'r');
    while($linha = fgets($f)){

        var_dump($linha);
        echo "<br>";
    }

    return $alunos;
}

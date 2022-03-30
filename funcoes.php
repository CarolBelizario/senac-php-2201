<?php


function cadastraAluno(array $aluno):bool /*array pois em $aluno eu queria passar mais informações*/ 
{

    /*echo "Aluno {$nome['nome']} cadastrado"; - IMPRIME DESSE JEITO*/ 

   $f = fopen( 'alunos.csv' , 'a');//abre o arquivo 'alunos'
   $escreveu = fwrite( $f, "{$aluno['matricula']};\"{$aluno['nome']}\"\n"); /*BARRA INVERTIDA CARACTERE DE ESCAPE / fwrite escre em um arquivo aberto*/
   fclose($f);//fecha o arquivo apontado por um ponteiro de arquivo aberto

   if($escreveu){
       return true;
   }else{
        return false;
   }
}

$funcionou = cadastraAluno(['matricula' => 1786, 'nome' => 'João']);

/*$aluno = ['nome' => 'Matheus', 'matricula' => '537529'];*/

/*if(cadastraAluno($aluno)){
    echo "<br>Função funcionando!";
} else{
    echo "<br>Função não está funcionando!";
}*/

if($funcionou){
    echo "<br>Aluno cadastrado com sucesso";
} else{
    echo "<br>Erro ao cadastrar";
}

/*CSV  - Common Separeted Value*/

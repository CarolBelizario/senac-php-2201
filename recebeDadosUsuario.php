<?php

/*SUPERVETORES
$_POST;
$GET
$REQUEST
*/

/*
echo "<pre>"; PARA O HTML DE RENDERIZAR

var_dump($_POST);
*/

/* COMO IMPRIMIR 
echo $_POST['aluno'];
echo $_POST['matricula'];
*/

/*INCLUDE - NOMEIA DE ONDE VEM QUEM EU CHAMO, NÃO DÁ ERRO FATAL
REQUIRE - DÁ ERRO FATAL, USO ESSENCIAL
REQUIRE_ONCE - PERCORRE O CÓDIGO E VERIFICA SE UMA FUNÇÃO FOI CHMADA DUAS VEZES, MAS EXECUTA NORMALMENTE*/

require_once 'funcoesAluno.php';

$matricula = $_POST['matricula'];
$aluno = $_POST['aluno'];

if(cadastraAluno(['matricula' => $matricula, 'nome' => $aluno])){

    echo "$aluno, você foi matriculado com sucesso!";

}else{

    echo "$aluno, alguma coisa deu errado :-(";
}

echo "<br><br><a href='dadosUsuario.php'>Cadastrar outro</a>
&nbsp;&nbsp;&nbsp;<a href = 'listarUsuarios.php'> Listar alunos cadastrados</a>";
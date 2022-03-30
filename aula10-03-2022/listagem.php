<?php

$f = fopen('nomes.csv', 'r');//leitura do que foi armazaenado em nomes.csv

echo "<a href='index.html'>Voltar</a>";


echo "<table border = '1'>
            <tr> 
                <td>Nome</td><td>Número</td>
             </tr>";


while ( $linha = fgets($f) ){//lê uma linha do ponteiro de um arquivo

    $campos = explode(',', $linha);//define o separador para definir bonitinho 
    $nome = $campos[0];
    $repeticao = $campos[1];

        echo " <tr>
                    <td>$nome</td><td>$repeticao</td>
                </tr>";


};

echo "</table";











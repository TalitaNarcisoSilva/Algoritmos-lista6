<?php

// Contador/iterador

$i = 0; // inicialização
$nota = 0;
$contAprovados = 0;
$contReprovados = 0;

while ($i<=2){
    //echo("i: " . $i . "<br>)
    echo("i: " . $i . "<br>");

    $nota = rand(0,10);

    if($nota > 6){
        echo (" <br> $nota - aprovado");
        $contAprovados++;
    } else {
        echo (" <br> $nota - Reprovado");
        $contReprovados++;
    }
    $i++;

}
echo (" <br> Fim do laço de repetição.");
echo ("<br> Quantidade de aprovados: " .  $contAprovados);
echo ("<br> Quantidade de Reprovados: " .  $contReprovados);
?>
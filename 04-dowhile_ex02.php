<?php
// Quantidade de carros montados
// Que execute pelo menos 1 vez (do...while)
// Contar quantos carros são vermelhos
// Somar o valor total dos carros vermelhos

$qtdCarrosMontados = 0;
$qtdCarrosVermelhos = 0;
$somaValorCarrosVermelhos = 0;
$carroMontado = 0;
$valorCarroMontado = 0;
$continuar = 0;


do {
    $qtdCarrosMontados++;
    //flag: 0-azul, 1-vermelho, 2-preto, 3-prata

    $corCarroMontado = rand(0,3);
    $valorCarroMontado = rand(70000, 10000);


    echo(" <br> 
    
    Cor do carro: $corCarroMontado . <br>");
    echo("Valor do carro: $valorCarroMontado . <br>");


    if ($corCarroMontado == 1){
        $qtdCarrosVermelhos++;
        $somaValorCarrosVermelhos = $somaValorCarrosVermelhos + $valorCarroMontado;
    }

    // flag de saida : 0(F) ou 1(V)
    $continuar = rand(0,1);

    echo(" <br> Deseja continuar: $continuar");
} while ($continuar == 1);

echo("<br> Quantidade de carros vermelhos: $qtdCarrosVermelhos <br>");
echo("Valor total de carros vermelhos R$: $somaValorCarrosVermelhos <br>")
?>
<?php
/*Um cliente faz compras. Não se sabe quantas e ele compra pelo menos um produto.
● Gere o valor do produto com rand(10,50).
● Gere $continuar = rand(0,1).
● Conte quantos produtos foram comprados.
● Some o valor total da compra.

● Mostre:
    ○ valor de cada produto;
    ○ quantidade de produtos;
    ○total da compra.*/

//inicializr
$contProdutos = 0;
$somaValoresProdutos = 0;

do {
    echo ("<hr>");

    $valorProduto = rand(10, 50);
    echo ("Valor do produto sorteado: R$ $valorProduto <br>");

    $contProdutos++; //contar, quantidade
    $somaValoresProdutos += $valorProduto;

    $continuar = rand(0, 1); //0-sair e 1-continuar
    echo ("Continuar?: $continuar <br>");
    
} while ($continuar == 1);

echo("Quantidade de produtos: $contProdutos <br>");
echo("Valor total de produtos R$: $somaValoresProdutos <br>");

?>
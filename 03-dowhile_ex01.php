<?php 
// Pedidos realizados


$continuar = 0;
$qtdPedidos = 0;

do{
    echo ("Pedido número: $qtdPedidos"); //interpolação
    // flag: 0-se não deseja comprar novamente
    // flag: 1- se deseja continuar

    $continuar = rand(0,1);

    echo("Continuar: $continuar <br>");

    if($continuar == true){
        echo("O cliente decidiu fazer outro pedido. <br>");
    } else {
        echo ("O cliente decidiu enccerrar as compras. <br>");
    }

} while($continuar == true);

//Qantas vendas foram realizadas?
echo ("Foram realizadas: $qtdPedidos");

?>
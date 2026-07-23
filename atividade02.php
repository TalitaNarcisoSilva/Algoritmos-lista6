<?php
/*
Um jogador joga videogame. E ele joga pelo menos uma vez.
● Gere a pontuação com rand(0,100).
● Gere $continuar = rand(0,1).
● Conte as partidas.
● Some a pontuação.
● Mostre a média ao final.*/

$mediaPontuacao = 0;
$somaPartidasPontuacao = 0;
$qtdPartidas = 0;

do {

    $pontuacao = rand(0, 100);
    echo ("Pontuação $pontuacao <br>");

    $qtdPartidas++;


    $somaPartidasPontuacao += $pontuacao;



    $continuar = rand(0, 1);
    echo ("continuar?: $continuar <br>");
} while ($continuar == 1);


echo ("Partidas jogadas $qtdPartidas <br>");
echo ("Soma pontuação $somaPartidasPontuacao <br>");

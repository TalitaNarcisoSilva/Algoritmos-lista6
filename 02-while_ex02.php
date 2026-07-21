<?php
//login e senha

$loginRealizado = 0;
$tentativas = 0;

while ($loginRealizado == 00 && $tentativas <=2){
   $loginRealizado = rand (0,1); //0- dados incorretos e 1-corretos
   echo ("<br> loginRealizado: . $loginRealizado");
   echo ("<br> tentativas: . $tentativas");


   if($loginRealizado == 1){
    echo ("Logou!");
   } else {
    echo ("tente novamente");
   }
   $tentativas++;
}

if($loginRealizado == 0){
    echo ("numero de tentativas atigido.");
    
}
?>
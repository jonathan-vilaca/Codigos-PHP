<?php
$aleatorio = rand(2, 30);
$divisores = 0;

///Descobrir número de divisores pra saber se o $aleatório é primo

for ($intervalo = 1; $intervalo <= $aleatorio; $intervalo++){
    if ($aleatorio % $intervalo == 0){
        $divisores ++;
    }
}

///Condição para saber se $aleatório é primo ou não segundo o número de divisores

if ($divisores != 2){
    echo 'O número '.$aleatorio.' não é primo';
}else{
    echo 'O número '.$aleatorio.' é primo';
}

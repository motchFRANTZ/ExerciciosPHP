<?php 
    $salario = 2000;
    $reajuste = 0;

    if ($salario < 1200) {
        $reajuste = 300;
        echo "Salário: " . $salario + $reajuste;
    } elseif (($salario>= 1200) && ($salario <=1600) ) {
        $reajuste = 250;
        echo "Salário: " . $salario + $reajuste;
    } else {
        $reajuste = 200;
        echo "Salário: " . $salario + $reajuste;
    }

?>
<?php
function PrimoInferior($num){ // exemplo recebeu 10
    for ($i= $num; $i > 0 + 1; $i--) { // for vai de 10 ate 1
        $n = $i; // $n recebe o valor do $i no final do while ele fica em 0 e recebe dnv um valor aqui
        $contador = 0; // reseta contador
        while ($n > 0) { // 
            if($i % $n ==0){ // 10 % 10,9,8,7,6,5,4,3,2,1,0 == 0 
                $contador++; // se o contador passar apenas 2 vezes e um numero primo
                // para testes utilize aqui echo "<br> i: ". $i; observe se o numero repetir apenas 2 vezes ele e primo
            }
            $n--;
        }
        if( $contador == 2){ // se o $contador tiver 2 acaba o codigo e retorna o maior primo
            return $i; // se vc deixar um echo $i aqui ele retorna todo os primos do numero digitado
        }
    }
}

echo PrimoInferior(30);
?>
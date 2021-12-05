<?php 
function retornaNumerosAleatoriosNoArray ($quantidade,$rand_max){
    $array = [];
    $i = 0;
    while ($i < $quantidade) {
        array_push($array, rand(0,$rand_max));
        $i++;
    }
    return $array;
}
$array_sorteado = (retornaNumerosAleatoriosNoArray(20,10)); // quero um array com 20 elementos e em cada elemento um rand do 0 ate 10
$values = array_count_values($array_sorteado);
arsort($values); // ordem decrecente, vai ficar assim ex: array = [1,1,2,3] $values = [1]=2, [2]=1, [3]=1
$most_popular =key($values); // pega a key do primeiro [] no ex seria o 1 que repetiu 2 vezes e para imprimir $values[numero que eu quero] = o numero de vezes q repetiu
echo 'Array sorteado = ['.implode(',', $array_sorteado).'] <br> O número que mais se repete é o '.$most_popular.' <br> Ele se repete '.$values[$most_popular].' vezes';

?>
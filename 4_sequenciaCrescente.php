<?php

function verificarvalorrepetido($array)
{
    $values = array_count_values($array);
    arsort($values);
    $most_popular = key($values);

    if ($values[$most_popular] >= 2) {
        return $most_popular;
    } else {
        return "false";
    }
}

function SequenciaCrescente($array)
{
    $situacao = verificarvalorrepetido($array);
    $array_antigo = $array;

    if ($situacao !== "false") { // tem numero repetido ?

        $key = array_search($situacao, $array); // pegar a key com o numero repetido
        unset($array[$key]); // deletar o elemento repetido
        $situacao = verificarvalorrepetido($array); // verifica dnv se ainda tem repetido

        sort($array_antigo);
        sort($array);
        if ($situacao == "false") {// não tem repetido ent gg da para fazer crescente 
            echo ' array antigo = [' . implode(',', $array_antigo) . ']<br>';
            echo 'array atual = [' . implode(',', $array) . ']  TRUE';
            echo "<br> <br>";

            return TRUE;
        } else { // tem repetido
            echo ' array antigo = [' . implode(',', $array_antigo) . ']<br>';
            echo 'array atual = [' . implode(',', $array) . ']  FALSE ';
            echo "<br> <br>";

            return FALSE;
        }
    }
    echo 'array = [' . implode(',', $array_antigo) . '] TRUE <br>';
    echo "<br> <br>";
    return TRUE;
}

SequenciaCrescente([1, 3, 2, 1]);
SequenciaCrescente([1, 3, 2]);
SequenciaCrescente([1, 2, 1, 2]);
SequenciaCrescente([3, 6, 5, 8, 10, 20, 15]);
SequenciaCrescente([1, 1, 2, 3, 4, 4]);
SequenciaCrescente([1, 4, 10, 4, 2]);
SequenciaCrescente([10, 1, 2, 3, 4, 5]);
SequenciaCrescente([1, 1, 1, 2, 3]);
SequenciaCrescente([0, -2, 5, 6]);
SequenciaCrescente([1, 2, 3, 4, 5, 3, 5, 6]);
SequenciaCrescente([40, 50, 60, 10, 20, 30]);
SequenciaCrescente([1, 1]);
SequenciaCrescente([1, 2, 5, 3, 5]);
SequenciaCrescente([1, 2, 5, 5, 5]);
SequenciaCrescente([10, 1, 2, 3, 4, 5, 6, 1]);
SequenciaCrescente([1, 2, 3, 4, 3, 6]);
SequenciaCrescente([1, 2, 3, 4, 99, 5, 6]);
SequenciaCrescente([123, -17, -5, 1, 2, 3, 12, 43, 45]);
SequenciaCrescente([3, 5, 67, 98, 3]);
?>
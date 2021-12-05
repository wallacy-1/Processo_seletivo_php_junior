<?php
function SeculoAno($ano){
    $seculo = $ano / 100;
    echo '<br>'.$ano . " Seculo: ". ceil($seculo);
    return ceil($seculo);
}

SeculoAno(1700);
SeculoAno(1801);

?>
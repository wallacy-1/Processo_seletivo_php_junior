<?php
function SeculoAno($ano){
    $seculo = $ano / 100;
    return ceil($seculo); // aredonda pra cima ex: ano foi 1901 / 100 = 19.01, ceil(19.01) = 20
}

echo SeculoAno(1700);
echo SeculoAno(1801);

?>
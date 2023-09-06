<?php
echo '<h2>Ejercicio 4</h2>';
echo '<p>4. Lee y muestra los valores de las variables del ejercicio anterior, pero ahora con la ayuda de
la matriz $GLOBALS o del modificador global de PHP.</p>';
$a1 = 'PHP5';
$z1[] = &$a1;
$b1 = '5a version de PHP';
//$c1 = $b*10; invalido
$a1 .= $b1;
//$b1 *= $c1; invalido
$z1[0] = 'MySQL';
function varibaleglobal(){
    global $a1, $b1, $c1, $z1;
     $x = $a1 . $b1. var_dump($z1);
     echo $x;
};
varibaleglobal();
?>
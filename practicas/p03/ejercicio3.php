<?php
echo '<h2>Ejercicio 3</h2>';
echo '<p>Muestra el contenido de cada variable inmediatamente después de cada asignación,
verificar la evolución del tipo de estas variables (imprime todos los componentes de los
arreglo):</p>';

$a = 'PHP5';
echo "<p>El valor de a es $a </p>";
$z[] = &$a;
echo "El valor de z es: ";
echo var_dump($z);
$b = '5a version de PHP';
echo "<p>El valor de b es $b </p>";
//$c = $b*10; Invalido
echo "<p>El  valor de c no es posible asignar porque b es un string y se multiplica por un entero</p>";
$a .= $b;
echo "<p>El nuevo valor de a es $a </p>";
//$b *= $c; invalido
echo "<p>El nuevo valor de b no es posible asignar porque implica la variable c y no se puede hacvr la operacion </p>";
$z[0] = 'MySQL';
echo "El nuevo valor de z es : ";
echo var_dump($z);
?>
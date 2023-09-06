<?php
echo '<h2>Ejercicio 3</h2>';
echo '<p>Muestra el contenido de cada variable inmediatamente después de cada asignación,
verificar la evolución del tipo de estas variables (imprime todos los componentes de los
arreglo):</p>';

$a = 'PHP5';
echo "<p>El valor de a es $a </p>";
$z[] = &$a;
echo "<p>El valor de z es :</p>" , var_dump($z);
$b = '5a version de PHP';
echo "<p>El valor de b es $b </p>";
//$c = $b*10; //Invalido
echo "<p>El valor de c es invalido por lo que muestra un error ya que la variable b no es numerica </p>";
$a .= $b;
echo "<p>El nuevo valor de a es $a </p>";
//$b *= $c;  //Invalido
echo "<p>El nuevo valor de b es no se puede asignar por problemas con variable c</p>";
$z[0] = 'MySQL';
echo "<p>El nuevo valor de z es :</p>" , var_dump($z);
?>
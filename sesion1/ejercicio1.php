<!-- Implementa un programa en PHP que represente una calculadora no interactiva. Es decir, se
definirán dos variables (numero1 y numero 2) y se realizarán operaciones básicas con ellas
(suma, resta, multiplicación y división). El resultado de todas estas operaciones se guardará
en variables independientes y se mostrará por pantalla en el navegador. -->

<?php

//variables
$numero1 = 5;	
$numero2 = 3;

//operaciones

$suma = $numero1 + $numero2;
$resta = $numero1 - $numero2;
$multiplicación = $numero1 * $numero2;
$division = $numero1/$numero2;

//imprimir

echo "La suma de $numero1 + $numero2 es: $suma <br>";
echo "La resta de $numero1 - $numero2 es: $resta <br>";
echo "La multiplicación de $numero1 x $numero2 es: $multiplicación <br>";
echo "La división de $numero1 / $numero2 es: $division <br>";

?>
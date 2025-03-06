<!-- 4. Almacena en una tabla los 10 primeros números pares e imprímelos, uno por cada línea. -->

<?php

for ($i=0; $i < 10; $i++) { 
    $num = $i * 2;
    $tabla[$i] = $num;
    echo $tabla[$i] . "<br>";

}

?>
<!-- Copia la tabla del ejercicio 3 y muéstrala coloreando las filas alternas, y haciendo que el tamaño sea
una constante: define(TAM, 10). -->

<?php
define("TAM", 10);
$contador = 1;

//fill & create tabla
for ($i = 1; $i <= TAM; $i++) {
    for ($j = 1; $j <= TAM; $j++) {
        $tabla[$i][$j] = $contador++;
    }
}
// init table
echo "<table border=5>"; //grosor 5
for ($i = 1; $i <= TAM; $i++) {
    $color = ($i % 2 == 0) ? '#CCCCCC' : '#FFFFFF'; // alternate row colors
    echo "<tr bgcolor='$color'>"; //init row of table with <tr> that means table row
    for ($j = 1; $j <= TAM; $j++) {
        echo "<td>" . $tabla[$i][$j] . "</td>"; // init cell of table with <td> that means table data 
    }
    echo "</tr>"; // close row of table with </tr>
}
//close table
echo "</table>";

?>

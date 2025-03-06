<!-- Implementa un programa en PHP que muestre por pantalla una tabla de dimensión 10x10 con los
números del 1 al 100. -->

<?php
$contador = 1;

//fill & create tabla
for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= 10; $j++)
        $tabla[$i][$j] = $contador++;
}
// init table
echo "<table border=5>"; //grosor 5
for ($i = 1; $i <= 10; $i++) {
    echo "<tr>" ;//init row of table with <tr> that means table row
    for ($j = 1; $j <= 10; $j++)
        echo "<td>" . $tabla[$i][$j] . "</td>"; // init cell of table with <td> that means table data 
        echo "</tr>";// close row of table with </tr>
}
//close table
echo "</table>";

?>

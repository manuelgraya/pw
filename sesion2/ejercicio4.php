<?php
define ("TAM", 10);
$contador = 1;
$tabla = [];

while(count($tabla)<TAM) {
    if ($contador%2==0) {
        $tabla[] = $contador;
    }
    $contador++;
}

echo "<table>";
for ($i = 0; $i < count($tabla); $i++) {
    echo "<tr>";
    echo "<td>" . $tabla[$i] . "</td>";
    echo "</tr>";
} 
echo "</table>";
?>
<!-- Imprime los valores del vector asociativo siguiente usando la estructura de control foreach:
$v[1]=90;
$v[30]=7;
$v['e']=99;
$v['hola']=43; -->

<?php
$v[1]=90;
$v[30]=7;
$v['e']=99;
$v['hola']=43;

foreach ($v as $key => $value) {
    echo "Clave: $key, Valor: $value <br>";
}
?>
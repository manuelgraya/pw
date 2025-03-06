<?php 
$nombre = 'Daniel'; 
echo "Me llamo $nombre.<br />"; 
echo 'Me llamo $nombre.<br />'; // no funciona 
echo "\$nombre = $nombre"; // se escapa el $ 

$fruta = 'manzana'; 
echo "Una $fruta no cuesta mucho dinero.<br />"; 
echo "Dos $frutas cuestan dos veces más.<br />"; // ! 
echo "Dos {$fruta}s cuestan dos veces más.<br />"; 
echo "{\$fruta} = {{$fruta}}.<br />"; 
?> 
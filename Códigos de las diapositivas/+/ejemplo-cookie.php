<?php 
// Colocación de una cookie llamada "nombre" que contiene 
// el valor "PW" y expira al final de la sesión. 
$ok = setcookie('nombre','PW'); 

// Idem pero expirando en la fecha actual (time() en segundos) 
// más 30 veces 24 veces 3600 segundos (es decir, 30 días). 
$ok = setcookie('nombre','PW',time()+(30*24*3600)); 

// Lo mismo usando la sintaxis con tabla/array
$opciones = [ 'expires' => time()+(30*24*3600),  
              'secure' => TRUE ];  
$ok = setcookie('nombre','Olivier',$opciones); 

// Eliminación de la cookie llamada "nombre". 
$ok = setcookie('nombre'); 
?> 
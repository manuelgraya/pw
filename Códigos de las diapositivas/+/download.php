<?php 
// Lista de los documentos (en una verdadera aplicación, 
// procedería de una base de datos). 
$documentos = array('documentos/bouca.pdf','documentos/cv.jpg'); 
// Procesamiento del formulario si $_POST no está vacío 
if (! empty($_POST)) { 
  // Recuperar el número del documento. 
  // Recuperar la clave de la primera línea de $_POST 
  // (normalmente del tipo n_x, siendo n el número del documento). 
  $número = key($_POST); 
  // Convierte la cadena en entero => solo queda el número. 
  $número = (integer) $número; 
  // Deducir el nombre del documento. 
  $nombre_archivo = $documentos[$número]; 
  // Enviar el encabezado de adjunto. 
  $header = "Content-Disposition: attachment; "; 
  $header .= "filename=$nombre_archivo\n" ; 
  header($header); 
  // Enviar el encabezado del tipo MIME (aquí, "desconocido"). 
  header("Content-Type: x/y\n"); 
  // Enviar el documento. 
  readfile($nombre_archivo); 
} 
?> 
 
<!DOCTYPE html> 
<html xmlns="http://www.w3.org/1999/xhtml" lang="es"> 
  <head>
    <meta charset="utf-8" /> 
    <title>Download</title> 
    <style> 
    table { border-collapse: collapse; } 
    table, td, th { border: 1px solid black; } 
    td, th { padding: 4px; } 
    </style> 
  </head> 
  <body> 
    <form action="download.php" method="post"> 
    <table> 
      <th>Documento</th><th>Descargar</th> 
    </tr> 
    <?php 
    // Un pequeño fragmento de código PHP para generar las filas 
    // de la tabla que presenta la lista de los documentos. 
    // Recorrer la lista de los documentos y utilizar el nombre 
    // para la presentación y el número como nombre de la imagen. 
    foreach($documentos as $número => $documento) { 
      echo sprintf 
          ( 
         "<tr><td>%s</td><td style=\"text-align:center\">%s</td></tr>\n", 
          $documento, 
          "<input type=\"image\" name=\"$número\" 
          alt=\"download\" src=\"documentos/download.png\" />" 
          ); 
    } 
    ?> 
    </table> 
    </form> 
  </body> 
</html> 
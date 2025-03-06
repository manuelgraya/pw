<?php 
// Inicialización de la variable de mensaje. 
$mensaje = ''; 
// Procesamiento del formulario. 
if (isset($_POST['aceptar'])) { 
  // Recuperar los datos en el archivo. 
  $datos = $_FILES["archivo"]; 
  // Extraer: 
  //    - su nombre 
  $nombre = $datos['name']; 
  //    - su tipo MIME 
  $tipo_mime = $datos['type']; 
  //    - su tamaño 
  $tamaño = $datos['size']; 
  //    - la ubicación del archivo temporal 
  $archivo_temporal = $datos['tmp_name']; 
  //    - el código de error 
  $código_error = $datos['error']; 
  
  // Controles y proceso 
  switch ($código_error) { 
  case UPLOAD_ERR_OK : 
    // Archivo recibido. 
    // Determinar su destino final 
    $destino = "documentos/$nombre"; 
    // Copiar el archivo temporal (comprobar el resultado). 
    if (copy($archivo_temporal,$destino)) { 
      // Copia OK => mostrar un mensaje de confirmación. 
      $mensaje = "Transferencia terminada - Archivo = $nombre - "; 
      $mensaje .= "Tamaño = $tamaño octetos - "; 
      $mensaje .= "Tipo MIME = $tipo_mime."; 
    } else { 
    // Problema de copia => mostrar un mensaje de error. 
      $mensaje = 'Problema de copia en el servidor.'; 
    } 
    break; 
  case UPLOAD_ERR_NO_FILE : 
    // No se ha especificado el archivo. 
    $mensaje = 'No se ha especificado el archivo.'; 
    break; 
  case UPLOAD_ERR_INI_SIZE : 
    // Tamaño archivo > upload_max_filesize. 
    $mensaje = "Archivo '$nombre' no transferido "; 
    $mensaje .= ' (tamaño > upload_max_filesize).'; 
    break; 
  case UPLOAD_ERR_FORM_SIZE : 
    // Tamaño archivo > MAX_FILE_SIZE. 
    $mensaje = "Archivo '$nombre' no transferido "; 
    $mensaje .= ' (tamaño > MAX_FILE_SIZE).'; 
    break; 
  case UPLOAD_ERR_PARTIAL : 
    // Archivo parcialmente transferido. 
    $mensaje = "Archivo '$nombre' no transferido "; 
    $mensaje .= ' (problema en la transferencia).'; 
    break; 
  case UPLOAD_ERR_NO_TMP_DIR : 
    // No hay directorio temporal. 
    $mensaje = "Archivo '$nombre' no transferido "; 
    $mensaje .= ' (no hay directorio temporal).'; 
    break; 
  case UPLOAD_ERR_CANT_WRITE : 
    // Error en la escritura del archivo en el disco. 
    $mensaje = "Archivo '$nombre' no transferido "; 
    $mensaje .= ' (Error en la escritura del archivo en el disco).'; 
    break; 
  case UPLOAD_ERR_EXTENSION : 
    // Transferencia detenida por la extensión. 
    $mensaje = "Archivo '$nombre' no transferido "; 
    $mensaje .= ' (transferencia detenida por la extensión).'; 
    break; 
  default : 
    // ¡Error imprevisto! 
    $mensaje = "Archivo no transferido "; 
    $mensaje .= " (error desconocido: $código_error)."; 
  } 
} 

?> 
<!DOCTYPE html> 
<html xmlns="http://www.w3.org/1999/xhtml" lang="es"> 
  <head>
    <meta charset="utf-8" /> 
    <title>Upload</title>
  </head> 
  <body> 
    <form action="subida-ficheros.php" method="post"  
                    enctype="multipart/form-data"> 
    <div> 
      Archivo:  
      <input size="100" type="file" name="archivo" /> 
      <input type="submit" name="aceptar" value="Aceptar" /><br /> 
      <?php echo $mensaje; ?> 
    </div> 
    </form> 
  </body> 
</html> 
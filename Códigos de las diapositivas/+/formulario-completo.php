<!DOCTYPE html> 
<html xmlns="http://www.w3.org/1999/xhtml" lang="es"> 
  <head> 
    <meta charset=utf-8" /> 
    <title>Entrada de datos</title> 
  </head> 
  <body> 
    <form action="tratamiento.php" method="post"> 
    <div> 
      Nombre: 
      <input type="text" name="nombre" value="" 
           size="20" maxlength="20" /> 
      Contraseña: 
      <input type="password" name="contraseña" value="" 
          size="20" maxlength="20" /> 
      <br />Sexo: 
      <input type="radio" name="sexo" value="M" />Hombre 
      <input type="radio" name="sexo" value="F" />Mujer 
      <input type="radio" name="sexo" value="?" 
                            checked="checked" />No sabe 
      <br />Foto: 
      <input type="file" name="foto" size="50" /> 
      <br />Colores preferidos: 
      <input type="checkbox" name="colores[azul]" />Azul 
      <input type="checkbox" name="colores[blanco]" />Blanco 
      <input type="checkbox" name="colores[rojo]" />Rojo 
      <input type="checkbox" name="colores[no]" 
                               checked="checked" />No sabe 
      <br />Idioma: 
      <select name="idioma"> 
        <option value="F">Francés</option> 
        <option value="E" selected="selected" >Español</option> 
        <option value="I">Italiano</option> 
      </select> 
      <br />Frutas preferidas:<br /> 
      <select name="frutas[]" multiple="multiple" size="8"> 
        <option value="A">Albaricoques</option> 
        <option value="C">Cerezas</option> 
        <option value="F">Fresas</option> 
        <option value="P">Melocotones</option> 
        <option value="?" selected="selected"> 
                         No sabe</option> 
      </select> 
      <br />Comentario:<br /> 
      <textarea name="comentario" rows="4" cols="50"></textarea> 
      <br /> 
      <input type="hidden" name="invisible" value="123" /><br /> 
      <input type="submit" name="enviar" value="Enviar" /> 
      <input type="image" name="validar" alt="validar" src="validar.gif" /> 
      <input type="reset" name="limpiar" value="Limpiar" /> 
      <input type="button" name="action" value="No hace nada" /> 
    </div> 
    </form> 
  </body> 
</html> 
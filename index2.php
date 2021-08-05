<?php
 
if (isset($_POST['texto'])) {
   $texto = $_POST['texto'];
 
   $arquivo = fopen('m.txt', 'w');
   fwrite($arquivo, $texto);
   fclose($arquivo);
}
?>
<!DOCTYPE html>
<html>
   <body>
      <form method="post">
         <textarea name="texto"></textarea>
         <button>Enviar</button>
      </form>
   </body>
</html>

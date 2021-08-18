<?php
 
if (isset($_POST['texto']))
{
   $texto = $_POST['texto'];
   $a = fopen('m.txt', 'a+');
   fwrite($a, $texto);
   fclose($a);}?>

<!DOCTYPE html>
<html>
<body>
<form method="post">
<textarea name="texto"></textarea>
<button>Enviar</button>
</form>
</body>
</html>

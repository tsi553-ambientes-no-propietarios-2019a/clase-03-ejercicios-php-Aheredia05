<?php
/**
 * Problema propuesto:
 *
 * Implementar una función que muestre un título centrado en pantalla, y la llamaremos posteriormente dos veces.
*/
?>

<html>
    
<?php
function mostrartitulo($men)
{
  echo "<h1 style=\"text-align:center\">";
  echo $men;
  echo "</h1>";
}



?>
    
    
<head>
<title>Problema</title>
</head>
<body>

<?php

   mostrartitulo("tITULO AQUI 1");
    mostrartitulo("tITULO AQUI 2");


?>

</body>
</html>
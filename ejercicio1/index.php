<?php
/**
 * Problema propuesto.
 * Mostrar la tabla de multiplicar del 2. Emplear el for, luego el while y por último el do/while.
 * La estructura for permite incrementar una variable de 2 en 2
 */

echo '<---------------------for--------------------------------';
echo '<br>';



    
for ($j=1;$j<=12;$j+2){
echo $j, " * 2 = ",  $j*2;
    echo '<br>';
}
echo "</tr>\n ";


echo '<--------------------while---------------------------------';
echo '<br>';

    $i=0;
while ($i<=12) {
       echo $i, " * 2 = ",  $i*2;
       echo '<br>';
       $i++;
       }

echo '<-------------------- do while---------------------------------';
echo '<br>';

  $i=0;

do {
   echo $i, " * 2 = ",  $i*2;
       echo '<br>';
       $i++;
   } 
   while ($i<=12);

?>


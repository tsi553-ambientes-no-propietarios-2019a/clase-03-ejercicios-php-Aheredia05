<?php

/**

Crear una función que determine si una palabra contiene las 5 vocales sin repetir ninguna. Presentar un mensaje que indique si la palabra contiene las 5 vocales y cuantas letras tiene la palabra.

Ejemplos:
Murciélago
aceituno
acuífero
http://buscapalabras.com.ar/palabras-con-las-cinco-vocales.html
 */
?>

$palabra = 'Murcielago';

    $palA = substr_count($palabra, 'a') + substr_count($palabra, 'A'); 
    $palE = substr_count($palabra, 'e') + substr_count($palabra, 'E'); 
    $palI = substr_count($palabra, 'i') + substr_count($palabra, 'I'); 
    $palO = substr_count($palabra, 'o') + substr_count($palabra, 'O'); 
    $palU = substr_count($palabra, 'u') + substr_count($palabra, 'U'); 
    $numeroTOTAL = strlen($palabra);


    if($palA == 1 and $palE == 1 and $palI == 1 and $palO == 1 and $palU == 1)
    {
        echo "La palabra: ($palabra). Contiene todas las vocales"; 
    }else{
        echo "La palabra: ($palabra). No tiene todas las vocales";

        echo "<br>";

        echo 'Palabras tiene las sigientes vocales:'; 
        echo "<br>";
        echo "Numero de vocales A: $buscaA <br>";
        echo "Numero de vocales E: $buscaE <br>";
        echo "Numero de vocales I: $buscaI <br>";
        echo "Numero de vocales O: $buscaO <br>";
        echo "Numero de vocales U: $buscaU <br>";
    }

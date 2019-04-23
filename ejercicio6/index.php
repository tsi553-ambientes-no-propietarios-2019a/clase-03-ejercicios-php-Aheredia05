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

    $buscaA = substr_count($palabra, 'a') + substr_count($palabra, 'A'); 
    $buscaE = substr_count($palabra, 'e') + substr_count($palabra, 'E'); 
    $buscaI = substr_count($palabra, 'i') + substr_count($palabra, 'I'); 
    $buscaO = substr_count($palabra, 'o') + substr_count($palabra, 'O'); 
    $buscaU = substr_count($palabra, 'u') + substr_count($palabra, 'U'); 
    $numeroTOTAL = strlen($palabra);


    if($buscaA == 1 and $buscaE == 1 and $buscaI == 1 and $buscaO == 1 and $buscaU == 1){
        echo "La palabra ($palabra) contiene todas las vocales"; 
    }else{
        echo "La palabra ($palabra) NO tiene todas las vocales";
        echo "<br>";
        echo 'Palabras que contien:'; 
        echo "<br>";
        echo "Numero de vocales A: $buscaA <br>";
        echo "Numero de vocales E: $buscaE <br>";
        echo "Numero de vocales I: $buscaI <br>";
        echo "Numero de vocales O: $buscaO <br>";
        echo "Numero de vocales U: $buscaU <br>";
    }
}
    echo "<br>";
    buscaVocales(); 
    echo "<br>";

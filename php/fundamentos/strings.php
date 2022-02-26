<?php
/**
 * Funciones para Strings
 */

 //Longitud de un String
echo strlen("texto");
echo "<br>";

//Cantidad de palabras en un String
echo str_word_count("cadena de texto");
echo "<br>";

//Girar un String al revés
echo strrev("texto");
echo "<br>";

//Busca un texto especifico en un String
echo strpos("Hola mundo", "mundo"); 
echo "<br>";

//Remplazar un texto dentro de un String
echo str_replace("Mundo", "Héctor", "Hola Mundo!"); 
echo "<br>";
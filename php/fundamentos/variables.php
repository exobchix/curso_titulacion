<?php
/**
 * Declaración de variables con el signo $
 */
$nombre = "Héctor";
$x = 5;   //Variables globales
$y = 10.5;

// Mostrar valores de las variables
echo "Hola $nombre <br>";
echo "¿Cómo estas ".$nombre."? <br>";
echo "El resultado de $x + $y es igual a:".$x+$y;

// Variables Globales y Locales
function variablesGlobalesLocales(){
    global $x,$y; //Indicar que se utilizarán las varibles globales
    $z = 3;
    echo($x+$y+$z)."<br>"; //Marcará error si no se especifica: 👆
}

variablesGlobalesLocales();

echo($x+$y+$z)."<br>"; //Marca erro porque la variable $z esta fuera de la función;

function variableEstatica() {
    static $x = 0;
    echo $x;
    $x++;
  }
  
variableEstatica();
variableEstatica();
variableEstatica();




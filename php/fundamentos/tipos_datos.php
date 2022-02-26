<?php

/**
 * Strings
 */
$mensaje = "<strong>Buenos días</strong>";
$nombre = "Héctor";

echo $mensaje . " " . $nombre;
echo "<br><br>";

/**
 * Int
 */
$entero = 5985;
var_dump($entero);
echo "<br><br>";

/**
 * Float o Double
 */
$flotante = 10.365;
var_dump($flotante);
echo "<br><br>";

/**
 * Boolean
 */
$verdadero = true;
$falso = false;

/**
 * Arrays
 */
$arreglo_autos = array("RAM", "BMW", "Nissan");
var_dump($arreglo_autos);
echo "<br><br>";

/**
 * Object
 */
class Coche
{
    public $modelo;
    public $color;
    public function __construct($modelo, $color)
    {
        $this->modelo = $modelo;
        $this->color = $color;
    }
    public function mensaje():string
    {
        return "Mi coche es un " . $this->modelo . " " . $this->color . "!";
    }
}

$miCoche = new Coche("Nissan", "Negro");
echo $miCoche->mensaje();
echo "<br>";
$miCoche = new Coche("Masserati", "Rojo");
echo $miCoche->mensaje();
echo "<br>";

/**
 * Null
 */
$variable = "valor de la variable";
$variable = null;
var_dump($variable);
echo "<br><br>";
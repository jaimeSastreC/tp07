<?php
function __autoload($name) {
    /* Variable selon les conventions de nommage */
    include_once 'class/' . lcfirst($name) . '.class.php';
}
$monCercle = new Cercle(12);

echo "rayon :". $monCercle->getRayon()."<br>";
echo "aire : ". $monCercle->aireCercle()."<br>";
echo "Volume : ". $monCercle->sphereCercle()."<br>";
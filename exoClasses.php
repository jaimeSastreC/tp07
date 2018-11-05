<?php
function __autoload($name) {
    /* Variable selon les conventions de nommage */
    include_once 'class/' . lcfirst($name) . '.class.php';
}
$monRectangle = new Rectangle(12,15);

echo $monRectangle->calculAire()."<br>";
echo $monRectangle->calculPerimetre()."<br>";

$monRectangle->setCouleur('rouge');
echo $monRectangle->getCouleur();
echo "<br>";

$monCarre = new Carre(15);


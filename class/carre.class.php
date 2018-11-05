<?php
/**
 * Created by PhpStorm.
 * User: lapiscine
 * Date: 05/11/2018
 * Time: 16:47
 */

class Carre extends Rectangle
{

    function __construct($longueur)
    {
        $this->setLargeur($longueur);
        $this->setLongueur($longueur);
        echo $this->getLongueur()."<br>";
        echo $this->getLargeur()."<br>";
    }

    function __destruct()
    {
        echo "<br> Carré détruit";
    }
}

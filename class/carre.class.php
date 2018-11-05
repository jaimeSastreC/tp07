<?php
/**
 * Created by PhpStorm.
 * User: lapiscine
 * Date: 05/11/2018
 * Time: 16:47
 */
include_once ('rectangle.class.php');

class Carre extends Rectangle
{

    public function __construct($cote)
    {
        parent::__construct($cote, $cote);
    }

    function __destruct()
    {
        echo "<br> Carré détruit";
    }
}

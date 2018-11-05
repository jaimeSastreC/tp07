<?php
/**
 * Created by PhpStorm.
 * User: lapiscine
 * Date: 05/11/2018
 * Time: 14:43
 */

class Cercle
{
    CONST PI= 3.1415927;
    private $rayon;

    function __construct($rayon){
        $this->rayon = $rayon;
    }

    function getRayon(){
        return $this->rayon;
    }

    function setRayon($rayon){
        $this->rayon = $rayon;
    }

    function aireCercle(){
        return $this->rayon*$this->rayon*self::PI; // aussi pi()
    }

    function sphereCercle(){
        return 4/3*($this->rayon**3)*self::PI; // aussi pow( base, exp )
    }
}

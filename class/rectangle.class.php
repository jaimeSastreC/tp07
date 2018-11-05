<?php
/**
 * Created by PhpStorm.
 * User: lapiscine
 * Date: 05/11/2018
 * Time: 14:05
 */

class Rectangle
{
    private $largeur, $longueur, $aire, $perimetre, $couleur, $pos_x, $pos_y;

    function __construct($largeur, $longueur)
    {
        $this->setLargeur($largeur);
        $this->setLongueur($longueur);
        echo $this->getLongueur();
        echo $this->getLargeur();

    }

    function __destruct()
    {
        echo "<br> Rectangle détruit";
    }

    public function setLargeur($largeur) {
        $this->largeur = $largeur;
    }

    public function getLongueur(){
        return $this->longueur;
    }

    public function setLongueur($longueur) {
        $this->longueur = $longueur;
    }

    public function getLargeur(){
        return $this->largeur;
    }

    public function calculAire(){
        $this->aire = $this->largeur*$this->longueur;
        return $this->aire;
    }

    public function calculPerimetre(){
        $this->perimetre = 2*$this->longueur * $this->largeur;
        return $this->perimetre;
    }

    public function setCouleur($couleur){
        $this->couleur = $couleur;
    }

    public function getCouleur(){
        return $this->couleur;
    }

    
}
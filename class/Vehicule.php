<?php
/**
 * Created by PhpStorm.
 * User: aymen
 * Date: 18/09/2018
 * Time: 14:21
 */

abstract class Vehicule
{
    protected $vitesse=0;

    public function accelerer() {
        $this->vitesse +=10;
    }

    public function tableauDeBord(){
        echo "Je suis un véhicule :D <br>";
        echo "Ma vitesse est $this->vitesse";
    }

    abstract function reglageMoteur();

}
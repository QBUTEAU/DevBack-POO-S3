<?php

class Vehicule{
    public $marque;
    public $modele;
    public $puissance;
    public $kilometrage;

    function __construct($marque, $modele, $puissance, $kilometrage){
        $this->marque = $marque;
        $this->modele = $modele;
        $this->puissance = $puissance;
        $this->kilometrage = $kilometrage;
        $this->affichage();
    }

    function affichage(){
        echo "Marque : ".$this->marque." | ";
        echo "Modèle : ".$this->modele." | ";
        echo "Puissance : ".$this->puissance." CV | ";
        echo "Kilométrage : ".$this->kilometrage."km";
    }

    function setPuissance($newPuissance){
        $this->puissance = $newPuissance;
        echo "La nouvelle puissance est de ".$this->puissance." CV.<br>";
    }

    function setKilometrage($newKilometrage){
        $this->kilometrage += $newKilometrage;
        echo "Le nouveau kilométrage est de ".$this->kilometrage."km.<br>";
    }
}

?>
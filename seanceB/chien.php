<?php

class Chiens{
    public $nom;
    public $race;
    public $age;
    public $poids;

    function affichage(){
        echo "Nom : ".$this->nom." | ";
        echo "Race : ".$this->race." | ";
        echo "Age : ".$this->age." ans | ";
        echo "Poids : ".$this->poids."kg";
    }

    function __construct($nom, $race, $age, $poids){
        $this->nom = $nom;
        $this->race = $race;
        $this->age = $age;
        $this->poids = $poids;
        $this->affichage();
    }

    function setAge($newAge){
        $this->age = $newAge;
        echo "Le nouvel âge est de ".$this->age." ans.<br>";
    }

    function setKilosPlus($newKilos){
        $this->poids += $newKilos;
        echo "Le nouveau poids est de ".$this->poids."kg.<br>";
    }

    function setKilosMoins($newKilos){
        $this->poids -= $newKilos;
        echo "Le nouveau poids est de ".$this->poids."kg.<br>";
    }
}

?>
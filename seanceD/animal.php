<?php

class Animal{
    private $nom;
    private $age;
    private $ageTheorique;
    private $regimeAlimentaire = [];
    private $etat;


    public function __construct($nom, $age, $ageTheorique){
        $this->nom = $nom;
        $this->age = $age;
        $this->ageTheorique = $ageTheorique;
        $this->etat = 'vivant';
        $this->regimeAlimentaire = array();
    }

    public function lire_informations(){
        return "<br>L'animal s'appelle ".$this->nom.", 
        il a ".$this->age." ans et il est ".$this->etat.".";
    }

    public function mange($aliment){
        if($this->etat == "vivant"){
            array_push($this->regimeAlimentaire, $aliment);
        } else {
            echo "<br>L'animal est mort, il ne peut plus manger.<br>";
        }
    }

    public function vieillir($nbannees){
        if($this->etat == "vivant"){
            $this->age += $nbannees;
            if($this->age > $this->ageTheorique){
                $this->etat = "mort";
            }
        } else {
            echo "<br>L'animal est mort, il ne peut plus vieillir.<br>";
        }
    }

    public function lire_regime(){
        echo "<br>Le régime alimentaire de l'animal est : ";
        foreach($this->regimeAlimentaire as $listeAliments){
            echo $listeAliments." ";
        }
        echo "<br>";
    }
    
}

// ---------------------------------------------------------------------- //

class Chien extends Animal{
    
    private $nomFamilier;

    public function __construct($nom, $age, $ageTheorique, $nomFamilier){
        parent::__construct($nom, $age, $ageTheorique);
        $this->nomFamilier = $nomFamilier;
    }
    
    public function seNomme(){
        return ' Le nom familier est '.$this->nomFamilier.".";
    }

    public function lire_informations(){
        return parent::lire_informations().''.$this->seNomme()."<br>";
    }
}


?>
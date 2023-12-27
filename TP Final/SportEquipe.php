<?php

interface iSportEquipe{
    public function afficher();
}

class SportEquipe extends Sport implements iSportEquipe{
    protected $nbJoueurs;

    public function __construct($intitule, $nbJoueurs){
        parent::__construct($intitule, false);
        $this->nbJoueurs = $nbJoueurs;
    }

    public function afficher(){
        echo ''.$this->intitule.' est le sport. 
        Il se joue à '.$this->nbJoueurs.' joueurs.';
    }

    public function modifierIntitule($intitule){
        $this->intitule = $intitule;
    }

}


?>
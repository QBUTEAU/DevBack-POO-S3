<?php

interface iJoueur{
    public function sePresente();
}

class Joueur implements iJoueur{
    public $nom;
    public $prenom;
    public $poste;

    public function __construct($nom, $prenom, $poste){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->poste = $poste;
    }

    public function sePresente(){
        echo 'Je m\'appelle '.$this->prenom.' '.$this->nom.' et je joue '.$this->poste.'.<br>';
    }
}

?>
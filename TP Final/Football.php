<?php

class Football extends SportEquipe implements iSportEquipe{
    protected $nomEquipe;
    protected $joueurs=[];

    public function __construct($nomEquipe){
        parent::__construct('Football', 11);
        $this->nomEquipe=$nomEquipe;
    }

    public function afficher(){
        parent::afficher();
        echo ' L\'équipe de '.$this->nomEquipe.' est composée de : '
        .count($this->joueurs).' joueurs.<br>';
        if (!empty($this->joueurs)) {
            echo "Liste des joueurs dans l'équipe :<br>";
            foreach ($this->joueurs as $joueur) {
                $joueur->sePresente();
            }
        }
    }

    public function addJoueur($joueur){
        $this->joueurs[]=$joueur;
    }

    // public function supprimerJoueur($joueur) {
    //     foreach ($this->joueurs as $key => $existingJoueur) {
    //         if ($existingJoueur === $joueur) {
    //             unset($this->joueurs[$key]);
    //             return; // Sortir de la boucle après la suppression
    //         }
    //     }
    // }

    public function modifierPosteJoueur($nom, $poste){
        foreach($this->joueurs as $joueur){
            if($joueur->nom==$nom){
                $joueur->poste=$poste;
            }
        }
    }

}

?>
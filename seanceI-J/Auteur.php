<?php
    class Auteur extends Artiste {

        public function __construct($nom, $prenom, $date, $image) {
            $this->nom=$nom;
            $this->prenom=$prenom;
            $this->date=$date;
            $this->image=$image;
        }

        public function SePresente() {
            return "Je suis $this->prenom $this->nom, je suis né(e) le $this->date.";
        }

    }
?>
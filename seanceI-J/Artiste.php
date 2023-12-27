<?php
    abstract class Humain {
         public $nom;
         public $prenom;
         public $date;
    }

    class Artiste extends Humain {
        protected $specialite;
        protected $image;
        
        public function __construct($nom, $prenom, $date, $specialite, $image) {
            $this->nom=$nom;
            $this->prenom=$prenom;
            $this->date=$date;
            $this->specialite=$specialite;
            $this->image=$image;
        }

        public function SePresente() {
            return "Je suis $this->prenom $this->nom, je suis né(e) le $this->date et je suis $this->specialite.";
        }
    }

    class Dessinateur extends Artiste {
        protected $titre;
        protected $nbPage;
        protected $auteurs= array();

        public function addAuteur ($auteur) {
            $this->auteurs[]=$auteur;
         }
 
    }
    
?>
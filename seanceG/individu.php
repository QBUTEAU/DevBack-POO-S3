<?php

    interface iHumain {

        public function travailler($nbHeures);
        public function reposer($nbJours);
        public function sePresente();
    }

    abstract class Individu implements iHumain{

        protected $nom;
        protected $prenom;
        protected $sexe;
        protected $revenu;
        protected $conges;

        public function __construct($nom, $prenom, $sexe){
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->sexe = $sexe;
        }

        public function travailler($nbHeures){
            $this->revenu += $nbHeures * 9.5;
        }

        public function reposer($nbJours){
            $this->conges += $nbJours;
        }

        public function sePresente(){
            return "Je suis ".$this->prenom." ".$this->nom.".";
        }

        public function RAZrevenu(){
            $this->revenu = 0;
        }

        public function RAZconges(){
            $this->conges = 0;
        }

        public function declareSalaire(){
            return "Je suis ".$this->prenom." ".$this->nom." et je touche ".$this->revenu." euros.<br>";
        }
    }

    class Etudiant extends Individu {

        protected $numEtudiant;
        protected $age;
        protected $formation;
        protected $resultat;
        static $nbEtudiants;

        public function __construct($nom, $prenom, $sexe, $numEtudiant, $formation, $age){
            parent::__construct($nom, $prenom, $sexe);
            $this->numEtudiant = $numEtudiant;
            $this->formation = $formation;
            $this->age = $age;
            self::$nbEtudiants++;
        }

        public function sePresente(){
            return parent::sePresente().' Je suis en '.$this->formation.'.';
        }

        public static function getNombreIndividus(){
            return self::$nbEtudiants.'<br>';
        }

        public function __destruct(){
            self::$nbEtudiants--;
        }

        public function getAge(){
            return "J'ai ".$this->age." ans.<br>";
        }

        public function setAge($age){
            $this->age = $age;
        }



        public function travailler($nbHeures){
            if ($this->age <= 18){
                parent::travailler($nbHeures) * 0.8;
            } else {
                parent::travailler($nbHeures);
            }
        }

        public function evaluer($noteExamen){
            if ($noteExamen >= 10){
                $valeur = "reçu(e)";
            } else {
                $valeur = "ajourné(e)";
            }
            return "Je suis ".$this->prenom." ".$this->nom." et je suis ".$valeur.".<br>";
        }
    }

    final class Etudiant_mmi extends Etudiant{

        private $option;

        public function __construct($nom, $prenom, $sexe, $numEtudiant, $formation, $age){
            parent::__construct($nom, $prenom, $sexe, $numEtudiant, $formation, $age);
        }

        public function quelleOption(){
            if ($this->option == null){
                return "Je suis ".$this->prenom." ".$this->nom." et je n'ai pas d'option pour le S4.<br>";
            } else {
                return "Je suis ".$this->prenom." ".$this->nom." et en S4 je ferai l'option ".$this->option.".<br>";
            }
        }

        public function ChangerOption($option){
            $this->option = $option;
        }

        public function sePresente(){
            return parent::sePresente().' Je suis en MMI. <br>';
        }
    }

?>
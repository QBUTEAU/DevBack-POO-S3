<?php

    class Vehicule{
        public $marque;
        public $puissance;
        public $kilometrage;

        public function __construct($marque, $puissance, $kilometrage){
            $this->marque = $marque;
            $this->puissance = $puissance;
            $this->kilometrage = $kilometrage;
        }

        public function parcourir($distance){
            $this->kilometrage += $distance;
        }

        public function lire_caracteristiques(){
            echo "Le véhicule est de marque ".$this->marque." et a une puissance de ".$this->puissance." chevaux.
            Il a parcouru ".$this->kilometrage." km.";
        }
    }

    // ---------------------------------------------------- //

    class Voiture extends Vehicule{
        private $type;

        public function __construct($marque, $puissance, $kilometrage, $type){
            parent::__construct($marque, $puissance, $kilometrage);
            $this->type = $type;
        }

        public function lire_type() {
            if (in_array($this->type, ['berline', 'suv', '4x4', 'break'])){
                return 'Le véhicule est de type '.$this->type.'.';
            } else {
                return 'Le type est incorrect.';
            }
        }

        public function lire_caracteristiques(){
            parent::lire_caracteristiques();
            echo " Il est de type ".$this->type.".";
        }
    }

    // ---------------------------------------------------- //

    class Bus extends Vehicule{
        private $nb_places;
        private $nb_essieux;

        public function __construct($marque, $puissance, $kilometrage, $nb_places, $nb_essieux){
            parent::__construct($marque, $puissance, $kilometrage);
            $this->nb_places = $nb_places;
            $this->nb_essieux = $nb_essieux;
        }

        public function lire_nb_places(){
            if ($this->nb_places > 9)
                return "Le véhicule peut accueillir beaucoup de personnes.";
        }

        public function lire_caracteristiques(){
            parent::lire_caracteristiques();
            echo " Le véhicule contient ".$this->nb_places." places et ".$this->nb_essieux." essieux.";
        }

        public function lire_nb_essieux(){
            if ($this->nb_essieux > 4){
                return "Le véhicule possède trop d'essieux.";
            } else {
                return 'Le véhicule possède '.$this->nb_essieux.' essieux.';
            }
        }
    }

?>
<?php
    //----------------------------------------------------
    // fichier : personne.php
    // ---------------------------------------------------
    // Notion d'encapsulation : protection des propriétés
    // de l'objet.    
    // IUT de Troyes - MMI 2ème année
    //----------------------------------------------------

    class Personne {
        // Définition des attributs de la classe
        private string $prenom;
        private string $nom;
        private int $age;

          // Définition de la fonction constructeur 
         public function __construct($n,$p,$a) { 
            $this->nom=$n;
            $this->prenom=$p;
            $this->age=$a;
        } 

        public function setNom($value)
        {
            $this->nom = $value;
        }

        // Définition du comportement sePresente() 
        public function sePresente(): string {  
            return 'Je m\'appelle '.$this->prenom.' '.$this->nom.' et j\'ai '.$this->age.' ans '; 
        }
    }
?>
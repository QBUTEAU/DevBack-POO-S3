<?php
    abstract class Livre {
        protected $titre;
        protected $nbPage;
        protected $auteurs= array();
        static $auteur;

        public function __construct ($titre, $nbPages) {
            $this->titre=$titre;
            $this->nbPages=$nbPages;
        }

        public function addAuteur ($auteur) {
           $this->auteurs[]=$auteur;
        }

        public function afficheLivre() {
            $affichage = "Titre : $this->titre<br/>";
            $affichage .= "Nombre de pages : $this->nbPages<br/>";
            $affichage .= "Auteur(s) : ";
            foreach ($this->auteurs as $auteur) {
                $affichage .= $auteur->prenom . ' ' . $auteur->nom . ', ';
            }
            $affichage .= '<br/>';
            return $affichage;
        }
        public function supprimerAuteur($auteur) {
            self::$auteur--;
        }

        public function addDessinateur ($dessinateur) {
            $this->auteurs[]=$dessinateur;
        }

    }
    class Roman extends Livre {
    }
?>
<?php
class Parallelepipede extends Rectangle{
        private float $hauteur;
        public function __construct($largeur, $longueur, $hauteur){
            parent::__construct($largeur, $longueur);
            $this->hauteur = $hauteur;
            echo "les dimensions du parallelepipede sont :".$this->getlargeur()."".",".$this->getlongueur().",".$this->hauteur;
        }
        public function getHauteur(){
            echo "l'hauteur du parallelepipede est :".$this->hauteur;
            return $this->hauteur;
        }
        public function setHauteur($hauteur1){
            $this->hauteur = $hauteur1;
        }
        public function calculVolume(){
            $volume = $this->getlongueur() * $this->getlargeur() * $this->getHauteur();
            echo "le volume du parallelepipede est :".$volume;
            echo"<br>";
        }
    }
    ?>
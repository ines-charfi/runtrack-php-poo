<?php
class Rectangle{
    private float $largeur;
    private float $longueur;

    public function __construct($largeur, $longueur){
        $this->largeur = $largeur;
        $this->longueur = $longueur;
    }
    public function getDimensions(){
        echo "la largeur de rectangle est :". $this->largeur."<b>";
        echo"<br>";
         echo" la longueur de rectangle est :".$this->longueur."<b>";
    }
    public function getlongueur(){
        echo "la longueur de rectangle est :".$this->longueur."<br>";
        return $this->longueur;
    }
    public function getlargeur(){
        echo "la largeur de rectangle est :".$this->largeur."<br>";
        return $this->largeur;
    }
    public function setDimensions($largeur, $longueur){
        $this->largeur = $largeur;
        $this->longueur = $longueur; 
        echo " les dimensions du rectangle sont :".$this->largeur."".",".$this->longueur;
        echo"<br>";
    
}
public function calculSurface($longueur, $largeur){
    $surface = ($this->getlargeur())* ($this->getlongueur());
    echo "la surface du rectangle est :".$surface;
    echo"<br>";
    }

    public function calculPerimetre(){
        $perimetre = 2 * ($this->getlargeur() + $this->getlongueur());
        echo "le perimetre du rectangle est :".$perimetre;
        echo"<br>";
    }
    }
    
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

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
    public function setDimensions($largeur, $longueur){
        $this->largeur = $largeur;
        $this->longueur = $longueur; 
        echo " les dimensions du rectangle sont :".$this->largeur."".",".$this->longueur;
        echo"<br>";
    
}
}
?>
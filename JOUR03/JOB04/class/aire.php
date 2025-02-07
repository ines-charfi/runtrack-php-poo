<?php
class Forme {
    public function aire() {
        return 0;
    }
}
class Rectangle extends Forme {
    private $largeur;
    private $hauteur;
    public function __construct($largeur, $hauteur) {
        Rectangle::getLargeur();
        $this->largeur = $largeur;
        $this->hauteur = $hauteur;
    }

public function getlargeur(){
    echo "la largeur du rectangle est :".$this->largeur."<br>";
    return $this->largeur;
}
public function gethauteur(){
    echo "l'hauteur du rectangle est :".$this->hauteur."<br>";
    return $this->hauteur;
}
    public function aire() {
        return $this->getlargeur() * $this->gethauteur();
    }
}



?>

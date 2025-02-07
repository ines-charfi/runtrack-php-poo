<?php

// Classe Forme (classe de base)
class Forme {
    private $largeur;
    private $hauteur;

    // Constructeur de la classe Forme pour initialiser largeur et hauteur
    public function __construct($largeur = 0, $hauteur = 0) {
        $this->largeur = $largeur;
        $this->hauteur = $hauteur;
    }

    // Méthode pour obtenir la largeur
    public function getLargeur() {
        return $this->largeur;
    }

    // Méthode aire() qui renvoie 0 par défaut
    public function aire() {
        return 0;
    }
}

// Classe Cercle qui hérite de Forme
class Cercle extends Forme {
    private float $radius; // Déclaration de la propriété radius avec un type "float"

    // Constructeur pour initialiser le rayon
    public function __construct(float $radius) {
        $this->radius = $radius; // Initialisation de la propriété radius
    }

    // Méthode pour obtenir le rayon
    public function getRadius() {
        echo " le rayon du cercle est :".$this->radius."<br>";
        return $this->radius;
    }

    // Méthode pour définir le rayon
    public function setRadius(float $radius) {
        echo " le rayon du cercle est :".$this->$radius."<br>";
        $this->radius = $radius;
    }

    // Surcharge de la méthode aire() pour calculer l'aire du cercle
    public function aire() {
        return 3.14 * pow($this->getRadius(), 2); // Aire d'un cercle : π * r²
    }
}
?>
// Création d'un objet Cercle





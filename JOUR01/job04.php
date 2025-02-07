<?php
class Point {
    public int $x;
    public int $y;

    // Constructeur pour initialiser les coordonnées x et y
    public function __construct(int $x, int $y) {
        $this->x = $x;
        $this->y = $y;
    }

    // Méthode pour afficher les coordonnées du point
    public function afficherLesPoints() {
        echo "Les coordonnées du point sont : ($this->x, $this->y)<br>";
    }

    // Méthode pour afficher la coordonnée x
    public function afficherX() {
        echo "La coordonnée x est : $this->x <br>";
    }

    // Méthode pour afficher la coordonnée y
    public function afficherY() {
        echo "La coordonnée y est : $this->y<br>";
    }

    // Méthode pour changer la valeur de x
    public function changerX(int $newX) {
        $this->x = $newX;
    }

    // Méthode pour changer la valeur de y
    public function changerY(int $newY) {
        $this->y = $newY;
    }
}

// Exemple d'utilisation de la classe Point
$point = new Point(3, 4);

// Affichage des coordonnées
$point->afficherLesPoints();  
$point->afficherX();          
$point->afficherY();          

// Changer les coordonnées du point
$point->changerX(10);
$point->changerY(15);

// Affichage des nouvelles coordonnées après modification
$point->afficherLesPoints();  // Affiche : (10, 15)
$point->afficherX();          // Affiche : 10
$point->afficherY();          // Affiche : 15
?>

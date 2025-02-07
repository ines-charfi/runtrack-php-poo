<?php

class Personnage {
    // Attributs de la classe Personnage
    private $x;
    private $y;

    // Constructeur pour initialiser la position du personnage
    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    // Méthode pour déplacer le personnage vers la gauche
    public function gauche() {
        $this->x -= 1;
    }

    // Méthode pour déplacer le personnage vers la droite
    public function droite() {
        $this->x += 1;
    }

    // Méthode pour déplacer le personnage vers le bas
    public function bas() {
        $this->y += 1;
    }

    // Méthode pour déplacer le personnage vers le haut
    public function haut() {
        $this->y -= 1;
    }

    // Méthode pour obtenir la position actuelle du personnage
    public function position() {
        return "Position actuelle : x = " . $this->x . ", y = " . $this->y;
    }
}

// Exemple d'utilisation de la classe
$personnage = new Personnage(0, 0);
echo $personnage->position() . "\n";  // Affiche la position initiale

// Déplacements
$personnage->droite();
$personnage->haut();
echo $personnage->position() . "\n";  // Affiche la nouvelle position après déplacements

$personnage->gauche();
$personnage->bas();
echo $personnage->position() . "\n";  // Affiche la position après un autre déplacement
?>

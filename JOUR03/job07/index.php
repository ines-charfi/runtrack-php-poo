<?php

// Classe Carte représentant une carte dans le jeu
class Carte {
    // Attributs privés : valeur et couleur de la carte
    private $valeur;
    private $couleur;

    // Constructeur pour initialiser une carte avec une valeur et une couleur
    public function __construct($valeur, $couleur) {
        $this->valeur = $valeur;
        $this->couleur = $couleur;
    }

    // Méthode pour récupérer la valeur de la carte
    public function getValeur() {
        return $this->valeur;
    }

    // Méthode pour récupérer la couleur de la carte
    public function getCouleur() {
        return $this->couleur;
    }

    // Méthode pour récupérer la description de la carte (valeur et couleur)
    public function __toString() {
        return $this->valeur . " de " . $this->couleur;
    }
}
?>


<?php

class Produit {
    // Attributs de la classe Produit
    private $nom;
    private $prixHT;
    private $TVA;

    // Constructeur pour initialiser les attributs
    public function __construct($nom, $prixHT, $TVA) {
        $this->nom = $nom;
        $this->prixHT = $prixHT;
        $this->TVA = $TVA;
    }

    // Méthode pour calculer le prix TTC
    public function calculerPrixTTC() {
        return $this->prixHT * (1 + $this->TVA / 100);
    }

    // Méthode pour afficher les informations du produit
    public function afficher() {
        echo "Nom du produit: " . $this->nom . "\n";
        echo "Prix HT: " . $this->prixHT . " €\n";
        echo "TVA: " . $this->TVA . " %\n";
        echo "Prix TTC: " . $this->calculerPrixTTC() . " €\n";
    }

    // Méthode pour modifier le nom du produit
    public function modifierNom($nouveauNom) {
        $this->nom = $nouveauNom;
    }

    // Méthode pour modifier le prix HT du produit
    public function modifierPrixHT($nouveauPrixHT) {
        $this->prixHT = $nouveauPrixHT;
    }

    // Méthode pour retourner le nom du produit
    public function getNom() {
        return $this->nom;
    }

    // Méthode pour retourner le prix HT du produit
    public function getPrixHT() {
        return $this->prixHT;
    }

    // Méthode pour retourner la TVA du produit
    public function getTVA() {
        return $this->TVA;
    }
}

// Création de trois produits avec des informations différentes
$produit1 = new Produit("Ordinateur", 800, 20);

$produit2 = new Produit("Imprimante", 300, 10);

$produit3 = new Produit("Disque Dur", 500, 5);

// Affichage des informations des produits
echo "Informations du produit 1:\n";
$produit1->afficher();
echo "\n";

echo "Informations du produit 2:\n";
$produit2->afficher();
echo "\n";

echo "Informations du produit 3:\n";
$produit3->afficher();
echo "\n";

// Modification des informations des produits
$produit1->modifierNom("Ordinateur Portable");
$produit1->modifierPrixHT(850);

$produit2->modifierNom("Smartphone");
$produit2->modifierPrixHT(650);

// Affichage des nouvelles informations des produits
echo "Nouvelles informations du produit 1:\n";
$produit1->afficher();
echo "\n";

echo "Nouvelles informations du produit 2:\n";
$produit2->afficher();
echo "\n";
?>


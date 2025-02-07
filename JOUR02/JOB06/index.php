<?php

class Commande {
    // Attributs privés
    private $numeroCommande;
    private $platsCommandes = [];
    private $statut;

    // Constructeur pour initialiser une commande
    public function __construct($numeroCommande) {
        $this->numeroCommande = $numeroCommande;
        $this->statut = 'en cours';
    }

    // Méthode pour ajouter un plat à la commande
    public function ajouterPlat($nomPlat, $prix) {
        $this->platsCommandes[$nomPlat] = $prix;
    }

    // Méthode pour annuler la commande
    public function annulerCommande() {
        $this->statut = 'annulée';
    }

    // Méthode privée pour calculer le total
    private function calculerTotal() {
        return array_sum($this->platsCommandes);
    }

    // Méthode pour calculer la TVA (20%)
    public function calculerTVA() {
        return $this->calculerTotal() * 0.20;
    }

    // Méthode pour afficher la commande
    public function afficherCommande() {
        echo "Numéro de commande: " . $this->numeroCommande . "\n";
        echo "Statut: " . $this->statut . "\n";
        echo "Plats commandés:\n";

        foreach ($this->platsCommandes as $plat => $prix) {
            echo "- $plat: $prix €\n";
        }

        $totalHT = $this->calculerTotal();
        $totalTTC = $totalHT + $this->calculerTVA();
        echo "Total HT: $totalHT €\n";
        echo "TVA (20%): " . $this->calculerTVA() . " €\n";
        echo "Total TTC: $totalTTC €\n";
    }
}

// Exemple d'utilisation
$commande = new Commande(12345);
$commande->ajouterPlat("Pizza Margherita", 12);
$commande->ajouterPlat("Spaghetti Carbonara", 15);
$commande->ajouterPlat("Salade César", 8);

// Afficher la commande
$commande->afficherCommande();

// Annuler la commande
$commande->annulerCommande();

// Afficher la commande après annulation
$commande->afficherCommande();
?>

<?php
// Classe Vehicule (classe de base)
class Vehicule {
    // Attributs privés pour la marque, modèle, année et prix
    private $marque;
    private $modele;
    private $annee;
    private $prix;

    // Constructeur pour initialiser les valeurs de la marque, modèle, année et prix
    public function __construct($marque, $modele, $annee, $prix) {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->annee = $annee;
        $this->prix = $prix;
    }

    // Méthode pour afficher les informations générales du véhicule
    public function informationsVehicule() {
        echo "Marque: " . $this->marque . "<br>";
        echo "Modèle: " . $this->modele . "<br>";
        echo "Année: " . $this->annee . "<br>";
        echo "Prix: " . $this->prix . " €<br>";
    }

    // Méthode démarrer() qui affiche un message générique
    public function demarrer() {
        echo "Attention, je roule.<br>";
    }
}

// Classe Voiture qui hérite de la classe Vehicule
class Voiture extends Vehicule {
    // Attribut supplémentaire pour le nombre de portes, initialisé à 4
    private $portes;

    // Constructeur de la classe Voiture
    public function __construct($marque, $modele, $annee, $prix, $portes = 4) {
        parent::__construct($marque, $modele, $annee, $prix);  // Appel du constructeur parent
        $this->portes = $portes; // Initialisation de l'attribut portes
    }

    // Méthode pour afficher les informations du véhicule et du nombre de portes
    public function informationsVehicule() {
        parent::informationsVehicule();  // Appel de la méthode du parent
        echo "Nombre de portes: " . $this->portes . "<br>";
    }

    // Surcharge de la méthode démarrer() pour un message personnalisé
    public function demarrer() {
        echo "La voiture démarre et roule doucement.<br>";
    }
}

// Classe Moto qui hérite de la classe Vehicule
class Moto extends Vehicule {
    // Attribut supplémentaire pour le nombre de roues, initialisé à 2
    private $roues;

    // Constructeur de la classe Moto
    public function __construct($marque, $modele, $annee, $prix, $roues = 2) {
        parent::__construct($marque, $modele, $annee, $prix);  // Appel du constructeur parent
        $this->roues = $roues; // Initialisation de l'attribut roues
    }

    // Méthode pour afficher les informations du véhicule et du nombre de roues
    public function informationsVehicule() {
        parent::informationsVehicule();  // Appel de la méthode du parent
        echo "Nombre de roues: " . $this->roues . "<br>";
    }

    // Surcharge de la méthode démarrer() pour un message personnalisé
    public function demarrer() {
        echo "La moto vrombit et démarre à toute vitesse.<br>";
    }
}

// Instanciation d'un objet Voiture avec les informations nécessaires
$voiture = new Voiture("Toyota", "Corolla", 2021, 20000);
echo "<b>Informations de la voiture :</b><br>";
$voiture->informationsVehicule();
$voiture->demarrer(); // Appel de la méthode démarrer de la voiture

echo "<br>";

// Instanciation d'un objet Moto avec les informations nécessaires
$moto = new Moto("Yamaha", "MT-07", 2020, 7500);
echo "<b>Informations de la moto :</b><br>";
$moto->informationsVehicule();
$moto->demarrer(); // Appel de la méthode démarrer de la moto

?>

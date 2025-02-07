<?php
class Animal {
    public int $age;
    public string $prenom;

    // Constructeur pour initialiser age à 0 et prenom à une chaîne vide
    public function __construct() {
        $this->age = 0;
        $this->prenom = '';
    }

    // Méthode pour vieillir l'animal, ajoute 1 à l'âge
    public function vieillir() {
        $this->age++;
    }

    // Méthode pour nommer l'animal, prend un paramètre pour définir le prénom
    public function nommer(string $nom) {
        $this->prenom = $nom;
    }
}

// Instantiation d'un objet Animal
$animal = new Animal( );

// Affichage de l'âge initial de l'animal
echo "L'âge de l'animal est : " . $animal->age . " ans.<br>";

// Vieillir l'animal d'1 an
$animal->vieillir();
echo "Après avoir vieilli, l'animal a : " . $animal->age . " ans.<br>";

// Nommer l'animal
$animal->nommer("Lion");
echo "Le nom de l'animal est : " . $animal->prenom . "<br>";
?>

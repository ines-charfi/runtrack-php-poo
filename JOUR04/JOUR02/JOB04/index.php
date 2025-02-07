<?php
require_once "./class/etudiant.php"; // Assurez-vous que le chemin est correct

// Créer une instance de la classe Etudiant
$student1 = new Student("John", "Doe", 123456);

// Afficher les informations de l'étudiant
echo "Numéro d'étudiant : " . $student1->getNumStudent() . "<br>";
echo "Nom : " . $student1->getNom() . "<br>";
echo "Prénom : " . $student1->getPrenom() . "<br>";

// Ajouter des crédits
$student1->addCredit();
echo "L'étudiant numéro " . $student1->getNumStudent() . " a " . $student1->getNbreCredits() . " crédits.<br>"; // Utiliser getNbreCredits()

// Créer un deuxième étudiant
$student2 = new Student("Jane", "Smith", 654321);

// Ajouter des crédits au deuxième étudiant
$student2->addCredit();

// Afficher les informations du premier étudiant
echo "L'étudiant numéro  " . $student1->getNumStudent() . " a " . $student1->getNbreCredits() . " crédits.<br>";
?>
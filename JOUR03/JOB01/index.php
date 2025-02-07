<?php
require_once "class/personne.php";
$personne1 = new personne(14);
$personne1->Affichage();
$personne1->Bonjour();
$personne1->setAge(15);
$personne1 ->Affichage();
$personne1->Bonjour();

// Création d'une instance de la classe Eleve
$eleve1 = new Eleve(15);
    
// Appel des méthodes de la classe Eleve
$eleve1->affichage();
$eleve1->allerEnCours();
$eleve1->Bonjour();
$eleve1->setAge(16);
$eleve1->afficherAge();
$eleve1->allerEnCours();

    // Créer un professeur
    $professeur = new Professeur("Informatique");
    $professeur->enseigner();
    // Afficher la matière enseignée par le professeur
    echo "La matière enseignée par le professeur est : ". $professeur->getMatiereEnseignee(). "<br>";
?>
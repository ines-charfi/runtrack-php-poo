<?php
require_once "../class/livre.php";
$livre1 = new Livre("Le joueur d'echec", "Stefan zweig", 193);
$livre2 = new Livre("SOIE", "Allessandro Baricco", 114);
$livre3 = new Livre(" Le poids des secrets","Aki Shimazaki","-34");
echo $livre1->getLivre();
echo "<br>";
echo $livre2->getLivre();

echo "<br>";

echo $livre1->setLivre(" Le poids des secrets","Aki Shimazaki","-34");
echo "<br>";
// Exemple d'utilisation


// Essayer de changer le nombre de pages avec une valeur valide
$livre1->setNbrePages(400);
echo $livre1->getLivre(); // Affiche les détails mis à jour

// Essayer de changer le nombre de pages avec une valeur invalide
$livre2->setNbrePages(-50); 
$livre2->getLivre();// Affiche un message d'erreur
?>




<?php
require_once "class/aire.php";
// Instantiation de la classe Rectangle avec largeur=5 et hauteur=10
$rectangle = new Rectangle(5, 10);
$rectangle->getlargeur();
$rectangle->gethauteur();
$rectangle->aire();

// Affichage du résultat de la méthode aire()
echo "L'aire du rectangle est : " . $rectangle->aire() . "<br>";


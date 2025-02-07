<?php
require_once "./class/rectangle.php";
 // Assurez-vous que le chemin est correct
$rectangle1= new Rectangle(17, 9);
$rectangle1->getDimensions();
$rectangle1->getlargeur();
$rectangle1->calculPerimetre();
$rectangle1->calculSurface(17,9);


$rectangle1->setDimensions(10, 5);
$rectangle1->calculPerimetre();
$rectangle1->calculSurface(10,5);
// Instancier un objet de la classe Parallelepipede
$parallelepipede = new Parallelepipede(5, 3, 8); // Données d'exemple
echo "Le volume du parallélépipède est : " . $parallelepipede->calculVolume() . "<br>";
$parallelepipede->getHauteur();

$parallelepipede->setHauteur(10);

?>


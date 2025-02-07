<?php
require_once "./class/forme.php";
$cerle = new Cercle(8);
$cerle->getLargeur();
$cerle->getradius();
$cerle->aire();
echo "<br>";
echo "l'aire du cercle est : ".$cerle->aire()."<br>";
echo "<br>";
$cercle = new Cercle(5);
echo "L'aire du cercle est : ". $cercle->aire(). "<br>";
$cercle->setRadius(7);
echo "L'aire du nouveau cercle est : ". $cercle->aire(). "<br>";
?>
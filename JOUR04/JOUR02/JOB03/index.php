<?php
require_once "class/livre_dispo.php";
$livre = new Livre("SOIE", "Allessandro Baricco", 114);
$livre->getLivre();
echo "<br>";
echo $livre->getLivre();
echo "<br>";
echo $livre->setNbrePages(345);
echo $livre->getLivre();
echo $livre->emprunter();
echo "<br>";
echo $livre->rendre();

?>




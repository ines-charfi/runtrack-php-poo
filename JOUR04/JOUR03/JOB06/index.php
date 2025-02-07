<?php
require_once"./class/vehicule.php";
// Instanciation d'un objet Moto avec les informations nécessaires
$moto = new Moto("Yamaha", "MT-07", 2020, 7500);
echo "<b>Informations de la moto :</b><br>";
$moto->informationsVehicule();
$moto->demarrer(); // Appel de la méthode démarrer de la moto

// Instanciation d'un objet Voiture avec les informations nécessaires
$voiture = new Voiture("Toyota", "Corolla", 2021, 20000);
echo "
<b>Informations de la voiture :</b><br>";

$voiture->demarrer();

// Appel des méthodes de la Voiture
$voiture->informationsVehicule();
?>
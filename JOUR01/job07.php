<?php
class Cercle {
    public float $rayon;

    // Constructeur pour initialiser le rayon du cercle
    public function __construct(float $rayon) {
        $this->rayon = $rayon;
    }

    // Méthode pour changer le rayon du cercle
    public function changerRayon(float $nouveauRayon) {
        $this->rayon = $nouveauRayon;
    }

    // Méthode pour afficher les informations du cercle
    public function afficherInfos() {
        echo "Rayon du cercle : $this->rayon<br>";
        echo "Diamètre du cercle : " . $this->diametre() . "<br>";
        echo "Circonférence du cercle : " . $this->circonference() . "<br>";
       echo "Surface du cercle : " ."<br>";
    }

    // Méthode pour calculer la circonférence du cercle
    public function circonference() {
        return (2 * pi() * $this->rayon);
    }
    
 

   

    // Méthode pour calculer le diamètre du cercle
    public function diametre() {
        return 2 * $this->rayon;
    }
}

// Création de deux cercles avec des rayons différents
$cercle1 = new Cercle(6);  // Rayon de 6
$cercle2 = new Cercle(9);  // Rayon de 9

// Affichage des informations pour chaque cercle
echo "Informations du Cercle 1 :\n";
$cercle1->afficherInfos();
echo "\n";

echo "Informations du Cercle 2 :\n";
$cercle2->afficherInfos();
?>

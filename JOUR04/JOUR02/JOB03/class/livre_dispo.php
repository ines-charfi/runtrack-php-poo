<?php
class Livre {
    private string $titre;
    private string $auteur;
    private int $nbre_pages;
    private bool $disponible = true;

    public function __construct(string $titre, string $auteur, int $nbre_pages) {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->setNbrePages($nbre_pages); // Utiliser le mutateur pour la validation
        $this->disponible = true; // Le livre est disponible par défaut.
    }

    public function getLivre(): string {
        return "Le titre du livre est : " . $this->titre . "<br>" .
               "L'auteur du livre est : " . $this->auteur . "<br>" .
               "Le nombre de pages du livre est : " . $this->nbre_pages . "<br>" .
               "Le livre est ".($this->disponible? "disponible" : "emprunté").".<br>";
    }

    public function setLivre(string $titre, string $auteur, int $nbre_pages): void {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->setNbrePages($nbre_pages); // Utiliser le mutateur pour la validation
    }

    public function setNbrePages(int $nbre_pages): void {
        if ($nbre_pages < 0) {
            echo "Erreur : le nombre de pages ne peut pas être négatif.<br>";
        } else {
            $this->nbre_pages = $nbre_pages;
            echo "Le nombre de pages du livre a été modifié.<br>";
        }
    }

    // Accesseur pour le nombre de pages
    public function getNbrePages(): int {
        return $this->nbre_pages;

    }
    public function disponible (): void {
        if ($disponible = true) {
            echo "Le livre est disponible.<br>";
        } else {
            echo "Le livre n'est pas disponible.<br>";
            $disponible = false;
        }
    }
    public function emprunter(): void {
        if ($this->disponible) {
            echo "Le livre est prêt.<br>";
            $this->disponible = false;
        } else {
            echo "Désolé : le livre n'est pas disponible.<br>";
        }
        
    }
    public function rendre(): void {
        if ($this->disponible) {
            echo "Désolé : le livre est déjà disponible.<br>";
        } else {
            echo "Le livre a été rendu.<br>";
            $this->disponible = true;
        }
        }


}
?>



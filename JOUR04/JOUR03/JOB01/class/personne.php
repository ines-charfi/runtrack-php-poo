<?php
class personne {
    public int $age = 14;

public function __construct(int $age){
    $this->age = $age;
}
    public function getAge(){
        return $this->age;
    }
    public function Affichage(){
        echo "L'age de la personne est de : ".$this->age." ans"."<br>";

    }
    public function setAge(int $nouvel_age){
        $this->age = $nouvel_age;
    }
    public function Bonjour(){
        echo "hello la personne qui a ".$this ->age." ans"."<br>";
    }

  
}
class Eleve extends personne {
    
        // Méthode pour afficher qu'il va en cours
        public function allerEnCours() {
            echo "Je vais en cours.<br>";
        }
    
        // Redéfinir la méthode afficherAge() pour l'élève
        public function afficherAge() {
            echo "J'ai " . $this->age . " ans.<br>";
        }
    }
   
class Professeur extends personne {
    // Propriété pour stocker la matière à enseigner
    private $matiereEnseignee;

    // Constructeur pour initialiser la matière
    public function __construct($matiere) {
        $this->matiereEnseignee = $matiere;
    }
    public function getmatiereenseignee() {
        return $this->matiereEnseignee;
    }

    // Méthode pour enseigner
    public function enseigner() {
        echo "Le cours de " . $this->matiereEnseignee . " va commencer.<br>";
    }
}




    

?>


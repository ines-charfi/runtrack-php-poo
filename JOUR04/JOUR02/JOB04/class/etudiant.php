<?php

class Student{
    private string $nom;
    private string $prenom;
    private int $num_student;
    private int $nbre_credits =0;

    public function __construct(string $nom, string $prenom, int $num_student) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->num_student = $num_student; 
       
        $this->addCredit();
       
       
    }

public function getNom(){
    return $this->nom;
}
public function getPrenom(){
    return $this->prenom;
}

public function getNumStudent(){
    return $this->num_student;
}

public function setNom($nom){
    $this->nom = $nom;
}
public function setPrenom($prenom){
    $this->prenom = $prenom;
}

public function setNumStudent($num_student){
    return $this->num_student = $num_student;
}
public function addCredit(){
    $this->nbre_credits++;
    echo "Nouveau nombre de crédits : ". $this->getNbreCredits()."<br>";
}


public function getNbreCredits(){
    return $this->nbre_credits;
}

}

?>


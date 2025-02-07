
<?php
class Personne{
    public string $nom;
    public string $prenom;
    public function __construct(string $name, string $prename){
        $this->nom = $name;
        $this->prenom = $prename;
        echo "je suis  ".$this->nom." ".$this->prenom."<br>";
    
    }
    public function Sepresenter ($nom, $prenom){
        return "je suis .$this->prenom.''.$this->prenom.";
    }
}
$personne = new Personne('ines' ,'charfi');
$personne = new Personne('saja' ,'charfi');
$personne = new Personne('chahd' ,'charfi');
$personne = new Personne('mohamed' ,'charfi');
$personne = new Personne('jihad' ,'charfi');
?>

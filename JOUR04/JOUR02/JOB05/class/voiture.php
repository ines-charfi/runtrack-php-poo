<?php
 
class Voiture
{
  // Attributs
  private string $marque;
  private string $modele;
  private string $année;

  private float $kilometrage;

  private float $reservoir =50;
  PRIVATE bool $en_marche = false;
  protected bool $_estRepare=false;
 
  // Méthodes
  public function __construct($marque, $modele, $année, $kilometrage) 
  {
    $this->$marque = 'Peugeot';
    $this->$modele = '208';
    $this->$année = '2021';
    $this->$kilometrage = 223;
  }
 
  // Démarre la voiture si le réservoir
  // n'est pas vide
  public function demarrer($en_marche) 
  {
    if ($this->verification($this->reservoir))
    {
      echo 'Le véhicule démarre';
      return true;
    }
 
    echo 'Le réservoir est vide...';
    return false;
  }
 
  // Vérifie s'il y'a du carburant dans le réservoir
  private function verification($reservoir) 
  {
    return ($this->$reservoir > 5); // renvoi true ou false
  }
 
  // Met le véhicule en maintenance
  protected function reparer()
  {
    $this->_estRepare = true;
    echo 'Le véhicule est en réparation';
  }
}
?>
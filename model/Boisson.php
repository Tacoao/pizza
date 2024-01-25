<?php
require_once("objet.php");
class Boisson extends objet{
    protected  int $idBoisson;
    protected  string $nomBoisson;
    protected  string $descBoisson;
    protected  float $prixBoisson;
    protected static string $classe = "Boisson";
    protected static string $identifiant = "idBoisson";

    public function __construct(int $idBoisson = null,string $nomBoisson = null, string $descBoisson = null , float $prixBoisson = null){
        if(!is_null($idBoisson)){
            $this->idBoisson = $idBoisson;
            $this->nomBoisson = $nomBoisson;
            $this->descBoisson = $descBoisson;
            $this->prixBoisson = $prixBoisson;
        }
    }

    public function __toString() : string {
        $n = $this->nomBoisson;
        return "$n";
      }
}
?>
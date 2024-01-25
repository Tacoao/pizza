<?php
require_once("objet.php");
class Dessert extends objet{
    protected  int $idDessert;
    protected  string $nomDessert;
    protected  string $descDessert;
    protected  float $prixDessert;
    protected static string $classe = "Dessert";
    protected static string $identifiant = "idDessert";

    public function __construct(int $idDessert = null,string $nomDessert = null, string $descDessert = null , float $prixDessert = null){
        if(!is_null($idDessert)){
            $this->idDessert = $idDessert;
            $this->nomDessert = $nomDessert;
            $this->descDessert = $descDessert;
            $this->prixDessert = $prixDessert;
        }
    }

    public function __toString() : string {
        $n = $this->nomDessert;
        return "$n";
      }
}
?>
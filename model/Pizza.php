<?php
require_once("objet.php");
class Pizza extends objet{
    protected  int $idPizza;
    protected  string $nomPizza;
    protected  string $descPizza;
    protected  float $prixPizza;
    protected bool $estduMoment;
    protected static string $classe = "Pizza";
    protected static string $identifiant = "idPizza";

    public function __construct(int $idPizza = null,string $nomPizza = null, string $descPizza = null , float $prixPizza = null,bool $estduMoment= null){
        if(!is_null($idPizza)){
            $this->idPizza = $idPizza;
            $this->nomPizza = $nomPizza;
            $this->descPizza = $descPizza;
            $this->prixPizza = $prixPizza;
            $this->estduMoment = $estduMoment;
        }
    }

    public function __toString() : string {
        $n = $this->nomPizza;
        return "$n";
      }
}
?>
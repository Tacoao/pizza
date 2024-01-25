<?php
require_once("objet.php");
class adherent extends objet {

    protected static string $classe = "Client";
    protected static string $identifiant = "idClient";

    // tableau pour construre le <select> : 
    // 1. la valeur de l'attribut name
    // 2. le(s) champ()s à afficher dans le visuel
    protected static $tableauSelect = array("emprunteur", "login");

    protected int $idClient;
    protected string $username;
    protected string $mdp;
    protected float $montantReductionCommande;
    protected string $nomClient;
    protected string $prenomClient;
    protected string $mailClient;
    protected int $telClient;
    protected int $estGestionnaire;

    public function __construct(string $idClient = null, string $username = null, string $mdp = null, float $montantReductionCommande = null, string $nomClient = null,
    string $prenomClient = null, string $mailClient = null, string $telClient = null, int $estGestionnaire = null) {
        if (!is_null($idClient)) {
            $this->idClient = $idClient;
            $this->username = $username;
            $this->mdp = $mdp;
            $this->montantReductionCommande = $montantReductionCommande;
            $this->nomClient = $nomClient;
            $this->prenomClient = $prenomClient;
            $this->mailClient = $mailClient;
            $this->telClient = $telClient;
            $this->estGestionnaire = $estGestionnaire;
        }
    }

    public function estGestionnaire() {
        return ($this->estGestionnaire == 1);

    }
}

?>
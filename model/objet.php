<?php
require_once("Panier.php");
class objet {
  public function get($attribut) {
    return $this->$attribut;
  }
  public function getclasse(){
    return static::$classe;
  }
  public function getidentifiant(){
    return static::$identifiant;
  }
  public function set($attribut, $valeur) : void {
    $this->attribut = $valeur;
  }

  public function affichable() {
    return true;
  }
  public function addToPanier() {
    $panier = Panier::getInstance();
    $panier->ajouterArticle($this);
}
  public static function getAll() {
    // récupération de la classe fille qui appelle la méthode
    $classeRecuperee = static::$classe;
    // écriture de la requête
    $requete = "SELECT * FROM $classeRecuperee;";
    // envoi de la requête et stockage de la réponse dans une variable $resultat
    $resultat = connexion::pdo()->query($requete);
    // traitement de la réponse par le prisme de la classe fille récupérée
    $resultat->setFetchmode(PDO::FETCH_CLASS, $classeRecuperee);
    // récupération des instances de la classe fille dans une variable $tableau
    $tableau = $resultat->fetchAll();
    // on retourne le tableau d'instances
    return $tableau;
}

  public static function getOne($id) {
    // on récupère le nom de la table
    $classeRecuperee = static::$classe;
    // on récupère le nom de l'identifiant
    $identifiant = static::$identifiant;
    // on construit la requête préparée avec un tag qui 
    // remplace la valeur de l'identifiant
    $requetePreparee = "SELECT * FROM $classeRecuperee WHERE $identifiant = :id_tag;";
    // on lance la méthode "prepare" et on récupère le résultat
    $resultat = connexion::pdo()->prepare($requetePreparee);
    // on crée le tableau contenant le tag et sa valeur
    $tags = array("id_tag" => $id);
    try {
      // on exécute la requête préparée
      $resultat->execute($tags);
      // on interprète le résultat selon la classe récupérée
      $resultat->setFetchmode(PDO::FETCH_CLASS, $classeRecuperee);
      // on récupère l'élément
      $element = $resultat->fetch();
      // on le retourne
      return $element;
    } catch(PDOException $e) {
      echo $e->getMessage();
    }
  }
}
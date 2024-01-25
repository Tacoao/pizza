<?php
require_once("model/Panier.php");
require_once("model/Pizza.php");
require_once("model/Boisson.php");
require_once("model/Dessert.php");
require_once("model/objet.php");

if (session_status() == PHP_SESSION_NONE) {
  // Démarrer la session
  session_start();
}
  // valeur par défaut de l'objet
  $objet ="Pizza";
  // les objets possibles
  $objets = ["Pizza", "Dessert","Boisson","Panier"];

  // valeur par défaut de l'action
  $action = "displayFirstPage";
  // les actions possibles
  $actions = ["displayAll", "displayOne", "delete", "displayCreationForm", "create", "displayUpdateForm", "update","displayFirstPage","addToPanier","displayPanier","retirerPanier","addToPanierBis"];

  // test pour savoir si un objet correct est passé dans l'url
  if (isset($_GET["objet"]) && in_array($_GET["objet"], $objets)) {
    // si c'est le cas, récupération de l'objet passé dans l'url
    $objet = $_GET['objet'];
  }
  // test pour savoir si une action correcte est passée dans l'url
  if (isset($_GET["action"]) && in_array($_GET["action"], $actions)) {
    // si c'est le cas, récupération de l'action passés dans l'url
    $action = $_GET['action'];
  }

  // calcul du bon contrôleur
  $controller = "controller".ucfirst($objet);
  
  // insertion du contrôleur 
  require_once("controller/controllerObjet.php");
  require_once("controller/$controller.php");
  
  // appel de la méthode de connexion
  require_once("config/connexion.php");
  connexion::connect();

  // appel de la méthode du contrôleur
  // appel de la méthode du contrôleur
  if ($action == "retirerPanier") {
    $controller::retirerPanier($_GET['id']);
  }
  else{
  $controller::$action();
  }
?>
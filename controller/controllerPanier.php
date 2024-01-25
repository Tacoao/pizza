


<?php
require_once("model/Panier.php");

class controllerPanier extends controllerObjet {
    protected static string $classe = "Panier";
    public static function displayPanier(){
        $panier = Panier::getInstance();
        $tableau = $panier->getArticles();
        include("view/debut.php");
        include("view/Menu.html");
        include("view/panier/ListPanier.php");
        include("view/fin.php");
    }

    public static function retirerPanier($id){
        $panier = Panier::getInstance();
        $panier->retirerArticle($id);
        $tableau = $panier->getArticles();
        include("view/debut.php");
        include("view/Menu.html");
        include("view/panier/ListPanier.php");
        include("view/fin.php");
        
    }
}
?>







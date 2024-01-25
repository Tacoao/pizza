<?php
class controllerObjet {
    
    public static function displayAll() {
        $classe = static::$classe;
        $identifiant = static::$identifiant;
        $title = "les {$classe}s";
        $tableau = $classe::getAll();
        include("view/debut.php");
        include("view/Menu.html");
        include("view/list.php");
        include("view/fin.php");
    }

    public static function addToPanier() {
        $classe = static::$classe;
        $identifiant = static::$identifiant;
        $id = $_GET[$identifiant];
        $element = $classe::getOne($id);
        $element->addToPanier();
        $tableau = $classe::getAll();
        include("view/debut.php");
        include("view/Menu.html");
        include("view/list.php");
        include("view/fin.php");  
    }
    public static function addToPanierBis() {
        $classe = static::$classe;
        $identifiant = static::$identifiant;
        $id = $_GET[$identifiant];
        $element = $classe::getOne($id);
        $element->addToPanier();
        $tableau = $classe::getAll();
        require_once("controller/controllerPanier.php");
        controllerPanier::displayPanier();
    }

    public static function displayFirstPage(){
        include("view/MainPage.html");
    }

    public static function displayOne() {
        $classe = static::$classe;
        $title = "un(e) {$classe}";
        $identifiant = static::$identifiant;
        $id = $_GET[$identifiant];
        $element = $classe::getOne($id);
        include("view/debut.php");
        include("view/menu.html");
        include("view/details.php");
        include("view/fin.php");
    }

    public static function delete() {
        $classe = static::$classe;
        $identifiant = static::$identifiant;
        $title = "supprimer un(e) {$classe}";
        $id = $_GET[$identifiant];
        $classe::delete($id);
        self::displayAll();
    }

    public static function displayCreationForm() {
        $champs = static::$champs;
        $classe = static::$classe;
        $identifiant = static::$identifiant;
        $title = "création $classe";
        include("view/debut.php");
        include("view/menu.html");
        include("view/formulaireCreation.php");
        include("view/fin.php");
    }

    public static function create() {
        $classe = static::$classe;
        $donnees = array();
        foreach($_GET as $cle => $valeur)
            if ($cle != "objet" && $cle != "action")
                $donnees[$cle] = $valeur;
        $classe::create($donnees);
        self::displayAll();
    }

    public static function displayUpdateForm() {
        $champs = static::$champs;
        $classe = static::$classe;
        $identifiant = static::$identifiant;
        $id = $_GET[$identifiant];
        $objet = $classe::getOne($id);
        $title = "modification $classe";
        include("view/debut.php");
        include("view/menu.html");
        include("view/formulaireModification.php");
        include("view/fin.php");
    }

    public static function update() {
        $classe = static::$classe;
        $donnees = array();
        foreach($_GET as $cle => $valeur)
            if ($cle != "objet" && $cle != "action")
                $donnees[$cle] = $valeur;
        $classe::update($donnees);
        self::displayAll();
    }

}
?>

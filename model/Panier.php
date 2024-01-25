<?php
class Panier {
    private static ?Panier $instance = null;
    protected array $articles;

    public function __construct() {
        $this->articles = [];
    }

    public static function getInstance(): Panier {
        if (!isset($_SESSION['panier_instance']) || $_SESSION['panier_instance'] === null) {
            $_SESSION['panier_instance'] = new self();
        }

        return $_SESSION['panier_instance'];
    }

    public function ajouterArticle( $article) {
        array_push($this->articles,$article);
    }

    public function retirerArticle($id){
        unset($this->articles[$id]);
    }
    
    public function getArticles() {
        return $this->articles;
    }
}
?>
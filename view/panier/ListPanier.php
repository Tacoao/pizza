<main class="list">
    <?php
        $prixCommande = 0.00;
        foreach($tableau as $key => $val) {
            $classe = $val->getclasse();
            $identifiant =$val->getidentifiant();
            $id =$val->get($identifiant);
            if($classe == "Pizza"){
            echo'<div class=produit>';
            echo '<img src="./Styles/image/pizz.png"/>';
            echo "<h1>{$val}</h1>";
            echo '<a href="routeur.php?objet=Panier&action=retirerPanier&id'.'=' . $key . '"><button>Delete</button></a>';
            echo '<a href="routeur.php?objet=' . $classe . '&action=addToPanierBis&'.$identifiant.'=' . $id . '"><button>Add</button></a>';
            echo '<a href="routeur.php?objet=Panier&action=retirerPanier&id'.'=' . $key . '"><button>Customise</button></a>';
            echo'</div>';
            }else{
                echo'<div class=produit>';
            echo '<img src="./Styles/image/pizz.png"/>';
            echo "<h1>{$val}</h1>";
            echo '<a href="routeur.php?objet=Panier&action=retirerPanier&id'.'=' . $key . '"><button>Delete</button></a>';
            echo '<a href="routeur.php?objet=' . $classe . '&action=addToPanierBis&'.$identifiant.'=' . $id . '"><button>Add</button></a>';
            echo'</div>';
            }
            $prixCommande = $prixCommande + $val->get("prix$classe");
        }
        echo'<div class=OrderSubmit>';
        echo"<h1>Prix :{$prixCommande}</h1>";
        echo'</div>';
    ?>
    </table>
</main>   
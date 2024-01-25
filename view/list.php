<main class="list">
    <?php
        foreach($tableau as $unElement) {
            $id = $unElement->get($identifiant);
            if ($classe =="Pizza" &&$unElement->get('estduMoment') == 1) {
                echo'<div class=estduMoment>';
            }
            else{echo'<div class=produit>';}
            echo '<img src="./Styles/image/pizz.png"/>';
            echo "<h1>{$unElement}</h1>";
            echo '<a href="routeur.php?objet=' . $classe . '&action=addToPanier&'.$identifiant.'=' . $id . '"><button>Ajouter au panier</button></a>';
            echo'</div>';
        }
    ?>
    </table>
</main>   
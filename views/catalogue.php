<?php
/**
 * Created by PhpStorm.
 * User: Been WhereU
 * Date: 2017-08-19
 * Time: 15:01
 */
require_once 'connexion_db.php';
header('Content-Type: text/html; charset=iso-8859-1');


?>

<?php
require_once 'top_page.php';
?>

<main  id="main_catalogue">
    <div>
        <h2>Catalogue</h2>
    </div>
    <div  class="half" id="div_catalogue">
        <?php
        $bateau = "SELECT * FROM bateau";
        $produit = "SELECT * FROM produit";
        $resultat = mysqli_query($dbconnexion,$bateau);
        $resultat2 = mysqli_query($dbconnexion,$produit);

       /* for ($i = 0 ; $i < mysqli_num_rows($resultat);$i++){
            echo "<div style='border: solid 1px black'>";
            $row_array = mysqli_fetch_row($resultat);
            var_dump($resultat);
            for ($j = 0; $j < mysqli_num_fields($resultat); $j++){
               // echo '<img src="../'.$resultat['Photo'].'" />';
               // echo '<p>'.$resultat['Prix'].'</p>';
            }
            echo "</div>";
        }*/
       while ($btstock = mysqli_fetch_array($resultat)){

           echo '<div  class="tab" style="border: solid 1px black">';
           echo '<img src="../'.$btstock['photo'].'" />';
           echo '<input id="tab-one" type="checkbox" name="tabs">';
           echo '<label for="tab-one">Détails</label>';
           echo '<div class="tab-content">';
           echo '<h3>',$btstock['nom_bateau'],'<h3>';
           echo '<p>',$btstock['prix'], '</p>';
           echo '<p>',$btstock['categorie_bateau'], '</p>';
           echo '</div>';
           echo '</div>';
       }
        ?>

        <?php

        while ($ptstock = mysqli_fetch_array($resultat2)){

            echo '<div  class="tab" style="border: solid 1px black">';
            echo '<img src="../'.$ptstock['photo'].'" />';
            echo '<input id="tab-one" type="checkbox" name="tabs">';
            echo '<label for="tab-one">Détails</label>';
            echo '<div class="tab-content">';
            echo '<h3>',$ptstock['nom_produit'],'<h3>';
            echo '<p>',$ptstock['prix'], '</p>';
            echo '<p>',$ptstock['categorie_produit'], '</p>';
            echo '</div>';
            echo '</div>';
        }

        ?>
    </div>
</main>
<?php
require_once 'bottom_page.php'
?>


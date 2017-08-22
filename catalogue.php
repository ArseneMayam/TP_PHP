<?php
/**
 * Created by PhpStorm.
 * User: Been WhereU
 * Date: 2017-08-19
 * Time: 15:01
 */

$liendb = mysqli_connect('localhost', 'root', 'root', 'tp_php');
mysqli_select_db($liendb, 'tp_php');
mysqli_set_charset('utf8', $liendb);


//require_once 'views/connexion_db.php';
header('Content-Type: text/html; charset=iso-8859-1');


?>

<?php
require_once 'views/top_page.php';
?>




<main  id="main_catalogue">


    <div  class="half" id="div_catalogue">


        <div>
            <h1>Nos Bateaux</h1>
            <?php
            $bateau = "SELECT * FROM bateau";
            $produit = "SELECT * FROM produit";
            $resultat = mysqli_query($liendb, $bateau);
            $resultat2 = mysqli_query($liendb, $produit);

            while ($btstock = mysqli_fetch_array($resultat)) {

                echo '<div  class="tab col-6" style="border: solid 1px black">';

                echo '<img src="' . $btstock['Photo'] . '" />';


                echo '<input id="tab-one" type="checkbox" name="tabs" checked>';
                echo '<label for="tab-one" class="tab-one">Details</label>';


                echo '<div class="tab-content">';
                echo '<h3>', $btstock['Nom_bateau'], '<h3>';
                echo '<p>', $btstock['Prix'], '</p>';
                echo '<p>', $btstock['Categorie_bateau'], '</p>';
                echo '<p>', $btstock['Description_bateau'], '</p>';


                echo '</div>';
                echo '</div>';

            }
            ?>

        </div>
        <div>
            <h1>Nos Produits</h1>

            <?php

            while ($ptstock = mysqli_fetch_array($resultat2)) {

                echo '<div  class="tab col-6" style="border: solid 1px black">';

                echo '<img src="' . $ptstock['Photo'] . '" />';


                echo '<input id="tab-one" type="checkbox" name="tabs" checked>';
                echo '<label for="tab-one" class="tab-one">Details</label>';


                echo '<div class="tab-content">';
                echo '<h3>', $ptstock['Nom_produit'], '<h3>';
                echo '<p>', $ptstock['Prix'], '</p>';
                echo '<p>', $ptstock['Categorie_produit'], '</p>';
                echo '<p>', $ptstock['Description_produit'], '</p>';


                echo '</div>';
                echo '</div>';


            }

            ?>
        </div>


    </div>
</main>
<?php
require_once 'views/bottom_page.php'
?>


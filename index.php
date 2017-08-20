<?php
/**
 * Created by PhpStorm.
 * User: mayammouarangue
 * Date: 14/08/17
 * Time: 14:52
 */

//require_once 'views/connexionDB.php';

require_once 'data/indexData.php';

?>

    <!--Le top page -->
<?php
require_once 'views/top_page.php';
?>
    <!--le main -->
    <main id="mainIndex">
        <h2 class="h2produits">Nos bateaux</h2>
        <div id="nosBateaux">

            <div id="bateauxMoteur" class="nosBateaux">
                <h3>Bateaux à moteur</h3>
                <img src="<?php echo $test;
                ?>" alt="">
            </div>
            <div id="bateauxVoiles" class="nosBateaux">
                <h3>Bateaux à voile</h3>
                <img src="<?php echo $imgVoile;
                ?>" alt="">

            </div>

        </div>

        <h2 class="h2produits">Nos produits</h2>
        <div id="nosProduits">
            <div id="vestesSauvetage" class="nosProduits">
                <h3>Vestes de sauvetage</h3>
                <img src=" <?php echo $veste ?>
                " alt="">
            </div>
            <div id="vetNautique" class="nosProduits">
                <h3>Vetements nautiques</h3>
                <img src=" <?php echo $vetement ?>
                " alt="">

            </div>
            <div id="accessoires" class="nosProduits">
                <h3>Accessoires</h3>
                <img src=" <?php echo $accessoire ?>
                " alt="">
            </div>
        </div>

    </main>
    <!--le bottom page-->
<?php
require_once 'views/bottom_page.php'
?>
<?php
/**
 * Created by PhpStorm.
 * User: Been WhereU
 * Date: 2017-08-20
 * Time: 19:39
 */
const CARD_NAME = 'monCaddy';
const ITEM = 'item_cadd';
const ITEM_QTY= 'qty_cadd';


if ( session_status() === PHP_SESSION_NONE ) {
    session_start();
}
require_once 'connexion_db.php';

//Creation de d'une variable de session nomme monCaddy

if (!array_key_exists(CARD_NAME, $_SESSION)){
    $_SESSION[CARD_NAME] = array();
}

//Ici $_seesion[CARD_NAME] existe toujours
$caddy =&  $_SESSION[CARD_NAME]; // $caddy est une référence (alias) sur $_SESSION[CARD_NAME]

function update_pannier($data){
    global  $caddy;
    if (array_key_exists(ITEM,$caddy)
     && check_item_id($caddy[ITEM])
     && array_key_exists(ITEM_QTY, $caddy)
     && check_item_qty($caddy[ITEM],$caddy[ITEM_QTY])){
        $item_id = $caddy[ITEM];
        $item_qty = $caddy[ITEM_QTY];
        if ($item_qty > 0){
            $caddy[$item_id] = $item_qty;
        }else{
            unset($caddy[$item_id]);
        }
    }
}

//creation de notre panier virtuel;

require_once 'top_page.php';
?>
<div id="caddy">

    <div>
        <div id="caddy_content">

        </div>
        <input type="submit" value="vider le panier">
    </div>

</div>

<?php
require_once'footer.php';
?>


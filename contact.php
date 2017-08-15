<?php
/**
 * Created by PhpStorm.
 * User: mayammouarangue
 * Date: 15/08/17
 * Time: 14:02
 */


/*var_dump($_SERVER['REQUEST_METHOD']);*/
$en_post = ('POST' === $_SERVER['REQUEST_METHOD']); // Indique si on est en post ou pas

/*var_dump($_POST);*/

$validation = array(
    // 1 caractère non-blanc minimum après filtrage
    'saisie_nom' => array(
        'val' => '',
        'err_msg' => '',
        'is_valid' => false,
    ),
    // 3 caractères alphabétiques
    'saisie_prenom' => array(
        'val' => '',
        'err_msg' => '',
        'is_valid' => false,
    ),

    'saisie_mail' => array(
        'val' => '',
        'err_msg' => '',
        'is_valid' => false,
    ),

);

$fnom =& $validation['saisie_nom'];
if (array_key_exists('saisie_nom', $_POST)) {
    $fnom['val'] = trim(filter_input(INPUT_POST, 'saisie_nom', FILTER_SANITIZE_STRING));
    $fnom['is_valid'] = (strlen($fnom['val']) > 0);
    if (!$fnom['is_valid']) {
        $fnom['err_msg'] = 'Le nom doit comporter au moins un caractère valide.';
    }
}

$fprenom =& $validation['saisie_prenom'];
if (array_key_exists('saisie_prenom', $_POST)) {
    $fprenom['val'] = trim(filter_input(INPUT_POST, 'saisie_prenom', FILTER_SANITIZE_STRING));

    $fprenom['is_valid'] = (1 === preg_match('/^[a-zA-Z]{3,}$/', $fprenom['val']));
    if (!$fprenom['is_valid']) {
        $fprenom['err_msg'] = 'Le prénom doit comporter au moins 3 caractères alphabétiques.';
    }
}
/*var_dump($validation);*/

$fmail =& $validation['saisie_mail'];
if (array_key_exists('saisie_mail', $_POST)) {
    $fmail['val'] = trim(filter_input(INPUT_POST, 'saisie_mail', FILTER_SANITIZE_STRING));

    if (filter_var($fmail['val'], FILTER_VALIDATE_EMAIL)) {
        $fmail['err_msg'] = 'Veuillez saisir une adresse mail correct';
    }
}

?>

<!--Le top page -->
<?php
require_once 'views/top_page.php';
?>
<!--le main-->
<main id="main_contact">
    <div>
        <h2>Informations</h2>
    </div>
    <div id="div_formContact">
        <form action="" method="post">
            <label for="nom">Nom</label>
            <input type="text" name="saisie_nom" id="nom" placeholder="Votre nom"
                   value="<?= $en_post ? $fnom['val'] : '' ?>">
            <?php if ($en_post && (!$fnom['is_valid'])) {
                echo '<p class="error">', $fnom['err_msg'], '</p>';
            }
            ?>

            <label for="prenom">Prenom</label>
            <input type="text" name="saisie_prenom" id="prenom" placeholder="Votre prenom"

                   value="<?= $en_post ? $fprenom['val'] : '' ?>">
            <?php if ($en_post && (!$fprenom['is_valid'])) {
                echo '<p class="error">', $fprenom['err_msg'], '</p>';
            }
            ?>


            <label for="email">E-mail</label>
            <input type="email" name="saisie_email" id="email" placeholder="Adresse mail"
                   value="<?= $en_post ? $fmail['val'] : '' ?>">
            <?php if ($en_post && (!$fmail['is_valid'])) {
                echo '<p class="error">', $fmail['err_msg'], '</p>';
            }
            ?>
            <label for="message">Votre message</label>
            <textarea name="message" id="" cols="83" rows="10"></textarea>
            <input type="submit" value="Envoyer" name="envoyer">
        </form>
    </div>

</main>
<!--le bottom page-->
<?php
require_once 'views/bottom_page.php'
?>

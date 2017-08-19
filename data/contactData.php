<?php
/**
 * Created by PhpStorm.
 * User: mayammouarangue
 * Date: 17/08/17
 * Time: 19:36
 */

$nom = $_POST['saisie_nom'];
$prenom = $_POST['saisie_prenom'];
$email = $_POST['saisie_email'];
$textMsg = $_POST['message'];

//var_dump($nom);
//var_dump($prenom);
//var_dump($email);
//var_dump($textMsg);

// on établie une connexion à la base de donnée
$liendb = mysqli_connect('localhost', 'root', 'root', 'tp_php');
mysqli_select_db($liendb, 'tp_php');

// on vérifie si l'on est bien connecté
if (!$liendb) {
    die("Connexion échoué!: " . mysqli_connect_error());
}


$sql = "INSERT INTO contact(nom, prenom, email)  
VALUES('$nom','$prenom','$email ' )";

mysqli_query($liendb, $sql);

/*if (mysqli_query($liendb, $sql)) {
    echo "Requete reussie";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($liendb);
}
*/

// on envoie un accusé de réception
// Envoie du formulaire par mail

$destinataire = $email;
$titre = "Accusé d'envoie";

$message = "";
$message .= "Bonjour, " . $prenom . ' ' . $nom . "\n";
$message .= "Ceci est un accusé d'envoie de votre message :" . "\n";
$message .= $textMsg . "\n";
$message .= "\n";
$message .= "\n";
$message .= "On vous recontacterai très prochainement" . "\n";
$message .= "- L'Equipe location-Bateaux" . "\n";

mail($destinataire, $titre, $message);




mysqli_close($liendb);


<?php
/**
 * Created by PhpStorm.
 * User: Been WhereU
 * Date: 2017-08-16
 * Time: 19:46
 */

// definition de constantes pour les données de connexion
DEFINE('DB_USER' , 'Been');
DEFINE('DB_PASSWORD' , 'Laurence');
DEFINE('DB_HOST' , 'localhost');
DEFINE('DB_NAME' , 'tp_php');


//Instruction pour la connexion a la base
$dbconnexion = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD);
// instruction pour la selection de la base
mysqli_select_db($dbconnexion,DB_NAME);
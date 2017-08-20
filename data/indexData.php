<?php
/**
 * Created by PhpStorm.
 * User: mayammouarangue
 * Date: 20/08/17
 * Time: 16:59
 */

/*1ere photo*/


$liendb = mysqli_connect('localhost', 'root', 'root', 'tp_php');
mysqli_select_db($liendb, 'tp_php');

$premiereImg = "
SELECT Photo
FROM bateau
WHERE ID = 1";


$result = mysqli_query($liendb, $premiereImg);


$row = mysqli_fetch_all($result);

$test = $row[0][0];


$requete = "SELECT * FROM bateau  ";

$result = mysqli_query($liendb, $requete);


$rows = mysqli_fetch_all($result);

$imgVoile = $rows[3][6];

/****************/

$requete = "SELECT * FROM produit  ";

$result = mysqli_query($liendb, $requete);


$rows = mysqli_fetch_all($result);

$veste = $rows[0][6];

$vetement = $rows[5][6];

$accessoire = $rows[7][6];

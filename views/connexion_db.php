<?php
/**
 * Created by PhpStorm.
 * User: Been WhereU
 * Date: 2017-08-16
 * Time: 19:46
 */


DEFINE('DB_USER' , 'Been');
DEFINE('DB_PASSWORD' , 'Laurence');
DEFINE('DB_HOST' , 'localhost');
DEFINE('DB_NAME' , 'tp_php');
$dbconnexion = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD);
mysqli_select_db(DB_NAME);
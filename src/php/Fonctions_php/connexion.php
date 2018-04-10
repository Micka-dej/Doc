<?php
/**
 * Created by PhpStorm.
 * User: eugenieroques
 * Date: 10/04/2018
 * Time: 11:16
 */

/* Paramètres de connexion à la db*/
$host = '127.0.0.1';
$dbname = 'breathink';
$username = 'breathink';
$password = 'breathink';

/* connexion à la db, on catch une eventuelle erreur de connexion*/
try {
    $conn = new PDO('mysql:host='.$host.';dbname='.$dbname.';', $username, $password);

} catch (PDOException $exception){
    die($exception -> getMessage());
}


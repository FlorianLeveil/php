<?php
define("DATABASE_HOST", "localhost");
define("DATABASE_NAME", "projet_fornite");
define("DATABASE_USER", "root");
define("DATABASE_PASSWORD", "root");

try{
    $db = new PDO('mysql:host='.DATABASE_HOST.';dbname='.DATABASE_NAME.';charset=utf8', DATABASE_USER, DATABASE_PASSWORD);

} catch(Exception $e) {
    die( $e->getMessage());
}

$req = $db->prepare('SELECT * FROM Spawn');
$req->execute();
$data_spawn = $req->fetchAll();
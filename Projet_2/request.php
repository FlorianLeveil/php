<?php
define("DATABASE_HOST", "localhost");
define("DATABASE_NAME", "php_spawn");
define("DATABASE_USER", "root");
define("DATABASE_PASSWORD", "root");

$db = new PDO('mysql:host='.DATABASE_HOST.';dbname='.DATABASE_NAME.';charset=utf8', DATABASE_USER, DATABASE_PASSWORD);



$req = $db->prepare('SELECT * FROM spwan');
$req->execute();
$data_spawn = $req->fetchAll();


